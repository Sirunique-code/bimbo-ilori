<!DOCTYPE html>
<html>
<head>
    <title>Thank You for Registering!</title>
</head>
<body>
    <h1>Thank You for Registering!</h1>
    <p>Dear {{ $data['fullName'] }},</p>
    <p>Thank you for registering for the Right Reset Master Class. We are excited to have you join us!</p>
    <p>Here are the details you provided:</p>
    <ul>
        <li><strong>Full Name:</strong> {{ $data['fullName'] }}</li>
        <li><strong>WhatsApp Number:</strong> {{ $data['whatsappNumber'] }}</li>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
    </ul>
    <p>We will be in touch soon with further instructions.</p>
    <p>Best regards,<br>The Right Reset Team</p>
</body>
</html>