<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $validated = $this->validatePayload($request);

        if (config('mail.default') === 'log') {
            return response()->json([
                'ok' => false,
                'message' => 'MAIL_MAILER masih log. Ubah ke smtp di file .env agar email masuk ke inbox.',
            ], 422);
        }

        $recipient = (string) config('mail.from.address', 'gogreenschoolk4@gmail.com');

        try {
            Mail::send('emails.contact-message', ['payload' => $validated], function ($mail) use ($validated, $recipient) {
                $mail->to($recipient)
                    ->replyTo($validated['email'], $validated['name'])
                    ->subject('Contact Form - Go Green School');
            });

            return response()->json([
                'ok' => true,
                'message' => 'Pesan berhasil dikirim ke inbox.',
            ]);
        } catch (Throwable $exception) {
            Log::error('Contact email send failed.', [
                'error' => $exception->getMessage(),
            ]);

            return response()->json([
                'ok' => false,
                'message' => 'Gagal mengirim email. Periksa konfigurasi SMTP dan App Password Gmail.',
            ], 500);
        }
    }

    public function sendWhatsApp(Request $request)
    {
        $validated = $this->validatePayload($request);

        $apiUrl = (string) config('services.whatsapp.api_url', 'https://api.fonnte.com/send');
        $apiToken = (string) config('services.whatsapp.api_token');
        $target = (string) config('services.whatsapp.target');

        if ($apiToken === '' || $target === '') {
            return response()->json([
                'ok' => false,
                'message' => 'Konfigurasi WhatsApp belum lengkap. Isi WHATSAPP_API_TOKEN dan WHATSAPP_TARGET di .env.',
            ], 422);
        }

        $payload =
            "Halo Go Green School!\n\n" .
            "Nama: {$validated['name']}\n" .
            "Email: {$validated['email']}\n" .
            "Telepon: {$validated['phone']}\n" .
            "Pesan:\n{$validated['message']}";

        try {
            $response = Http::withHeaders([
                'Authorization' => $apiToken,
            ])->asForm()->post($apiUrl, [
                'target' => $target,
                'message' => $payload,
            ]);

            $providerPayload = $response->json();
            $providerStatus = is_array($providerPayload)
                ? (bool) ($providerPayload['status'] ?? false)
                : false;
            $providerReason = is_array($providerPayload)
                ? (string) ($providerPayload['reason'] ?? $providerPayload['message'] ?? '')
                : '';

            if (! $response->successful() || ! $providerStatus) {
                Log::error('Contact WhatsApp send failed.', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                    'provider_reason' => $providerReason,
                ]);

                $errorMessage = 'Gagal mengirim WhatsApp. Periksa token/API WhatsApp Anda.';
                if ($providerReason !== '') {
                    $errorMessage .= ' Detail: ' . $providerReason;
                }

                return response()->json([
                    'ok' => false,
                    'message' => $errorMessage,
                ], 422);
            }

            return response()->json([
                'ok' => true,
                'message' => 'Pesan WhatsApp berhasil dikirim.',
            ]);
        } catch (Throwable $exception) {
            Log::error('Contact WhatsApp send exception.', [
                'error' => $exception->getMessage(),
            ]);

            return response()->json([
                'ok' => false,
                'message' => 'Tidak bisa terhubung ke layanan WhatsApp API.',
            ], 500);
        }
    }

    private function validatePayload(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'phone' => ['required', 'string', 'max:30'],
            'message' => ['required', 'string', 'max:5000'],
        ]);
    }
}
