<!DOCTYPE html>
<html>
<head>
    <title>Thank You for Registering!</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
    }
    h1 {
        color: #2c3e50;
    }
    ul {
        list-style-type: none;
        padding: 0;
    }
    li {
        margin-bottom: 5px;
    }
</style>

</head>
<body>
    <h1>Thank You for Registering!</h1>
    <p>Dear {{ $data['firstName'] }},</p>
    <p>Thank you for registering for the Right Reset Master Class. We are excited to have you join us!</p>
    <p>Here are the details you provided:</p>
    <ul>
        <li><strong>Full Name:</strong> {{ $data['firstName'] .' '. $data['lastName'] }}</li>
        <li><strong>WhatsApp Number:</strong> {{ $data['whatsappNumber'] }}</li>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
    </ul>
    <p>We will be in touch soon with further instructions.</p>
    <p>Best regards,<br>The Right Reset Team</p>
</body>
</html>