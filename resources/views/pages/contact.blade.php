@extends('layouts.app')

@section('title', 'Contact — Go Green School')
@section('meta_description', 'Contact Go Green School. Send us a message for questions, partnerships, or to share your school\'s eco-friendly activities.')

@section('content')

{{-- PAGE HEADER --}}
<section class="w-full border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-6 py-14">
    <div class="mx-auto max-w-7xl text-center">
        <span class="material-symbols-outlined mb-4 text-6xl text-primary">mail</span>
        <h1 class="text-3xl font-bold text-slate-900 dark:text-slate-100 tracking-tight mb-2" data-i18n="contact_title">Contact Us</h1>
        <p class="text-lg text-slate-600 dark:text-slate-400" data-i18n="contact_subtitle">Have questions? Reach out to us.</p>
    </div>
</section>

{{-- CONTACT FORM --}}
<section class="mx-auto w-full max-w-2xl px-6 py-16">
    <div class="rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-8 md:p-10 shadow-sm animate-slide-up">
        <form id="contact-form" action="{{ route('contact.email') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5" data-i18n="contact_name">Your Name</label>
                <input type="text" name="name" required data-i18n="contact_name">
            </div>
            <div>
                <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5" data-i18n="contact_email">Email</label>
                <input type="email" name="email" required data-i18n="contact_email">
            </div>
            <div>
                <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5" data-i18n="contact_phone">Phone Number</label>
                <input type="tel" name="phone" required data-i18n="contact_phone">
            </div>
            <div>
                <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5" data-i18n="contact_msg">Message</label>
                <textarea name="message" rows="5" required data-i18n="contact_msg"></textarea>
            </div>
            <div>
                <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5" for="contact-method" data-i18n="contact_method">Send via</label>
                <select id="contact-method" name="send_method" class="w-full" required>
                    <option value="wa" data-i18n="contact_method_wa">WhatsApp</option>
                    <option value="email" data-i18n="contact_method_email">Email</option>
                </select>
                <p class="mt-2 text-xs text-slate-500 dark:text-slate-400" data-i18n="contact_method_hint">Choose where your message should be sent.</p>
            </div>
            <div class="pt-2">
                <button type="submit" class="w-full flex items-center justify-center rounded-lg h-12 bg-primary hover:bg-green-500 transition-colors text-slate-900 font-bold text-base btn-animated" data-i18n="contact_send">
                    Send Message
                </button>
            </div>
        </form>
    </div>

    <div class="mt-10 text-center">
        <p class="text-slate-600 dark:text-slate-400 font-medium mb-4">Follow us</p>
        <div class="flex gap-3 justify-center animate-stagger">
            <a class="w-10 h-10 rounded-full border border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-500 hover:bg-primary hover:text-slate-900 hover:border-primary transition-all hover-scale" href="#"><span class="material-symbols-outlined text-xl">public</span></a>
            <a class="w-10 h-10 rounded-full border border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-500 hover:bg-primary hover:text-slate-900 hover:border-primary transition-all hover-scale" href="#"><span class="material-symbols-outlined text-xl">photo_camera</span></a>
            <a class="w-10 h-10 rounded-full border border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-500 hover:bg-primary hover:text-slate-900 hover:border-primary transition-all hover-scale" href="#"><span class="material-symbols-outlined text-xl">smart_display</span></a>
            <a class="w-10 h-10 rounded-full border border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-500 hover:bg-primary hover:text-slate-900 hover:border-primary transition-all hover-scale" href="#"><span class="material-symbols-outlined text-xl">alternate_email</span></a>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contact-form');
    if (!form) {
        return;
    }
    const emailEndpoint = form.getAttribute('action') || '/contact/email';
    const whatsappEndpoint = '{{ route('contact.whatsapp') }}';

    form.addEventListener('submit', async function (event) {
        event.preventDefault();

        const formData = new FormData(form);
        const name = String(formData.get('name') || '').trim();
        const email = String(formData.get('email') || '').trim();
        const phone = String(formData.get('phone') || '').trim();
        const message = String(formData.get('message') || '').trim();
        const method = String(formData.get('send_method') || 'wa');

        const csrfToken = String(formData.get('_token') || '');
        const endpoint = method === 'email' ? emailEndpoint : whatsappEndpoint;

        const requestData = new FormData();
        requestData.append('_token', csrfToken);
        requestData.append('name', name);
        requestData.append('email', email);
        requestData.append('phone', phone);
        requestData.append('message', message);

        try {
            const response = await fetch(endpoint, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                },
                body: requestData,
            });

            const result = await response.json().catch(function () {
                return {};
            });

            if (!response.ok || result.ok === false) {
                alert(result.message || 'Gagal mengirim pesan.');
                return;
            }

            alert(result.message || 'Pesan berhasil dikirim.');
            form.reset();
        } catch (error) {
            alert('Tidak dapat terhubung ke server.');
        }
    });
});
</script>

@endsection
