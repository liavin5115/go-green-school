<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Message</title>
</head>
<body style="margin:0;padding:20px;background:#f6f9f4;font-family:Arial,sans-serif;color:#1f2937;">
    <table width="100%" cellpadding="0" cellspacing="0" style="max-width:640px;margin:0 auto;background:#ffffff;border:1px solid #d1d5db;border-radius:10px;overflow:hidden;">
        <tr>
            <td style="padding:18px 20px;background:#8fa31e;color:#0f172a;font-size:20px;font-weight:700;">
                Go Green School - Contact Form
            </td>
        </tr>
        <tr>
            <td style="padding:20px;">
                <p style="margin:0 0 12px;"><strong>Name:</strong> {{ $payload['name'] }}</p>
                <p style="margin:0 0 12px;"><strong>Email:</strong> {{ $payload['email'] }}</p>
                <p style="margin:0 0 12px;"><strong>Phone:</strong> {{ $payload['phone'] }}</p>
                <p style="margin:0 0 8px;"><strong>Message:</strong></p>
                <p style="margin:0;white-space:pre-line;line-height:1.6;">{{ $payload['message'] }}</p>
            </td>
        </tr>
    </table>
</body>
</html>
