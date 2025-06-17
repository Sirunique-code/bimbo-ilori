<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
    <style>
        body, table, td, a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }
        table {
            border-collapse: collapse;
        }
        img {
            border: 0;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f4f6f8;
            color: #333;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
        }
        .header {
            background-color: rgb(255, 221, 0);
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }
        .header img {
            max-width: 150px;
        }
        .content {
            padding: 20px;
            line-height: 1.6;
        }
        .content h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .content p {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .content strong {
            color: #5d115d;
        }
        .footer {
            text-align: center;
            padding: 20px 10px;
            font-size: 12px;
            color: #999;
        }
        .footer a {
            color: #5d115d;
            text-decoration: none;
        }
        .social-icons a {
            margin: 0 5px;
            text-decoration: none;
        }
        .social-icons img {
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>
    <!-- Email Container -->
    <table class="email-container" cellpadding="0" cellspacing="0" width="100%">
        <!-- Header Section -->
        <tr>
            <td class="header">
                <img src="https://bimboilori.com/assets/img/bi-logo-full2.png" alt="Bimbo Ilori Logo">
            </td>
        </tr>

        <!-- Content Section -->
        <tr>
            <td class="content">
                <h2>New Contact Message</h2>
                <p><strong>First Name:</strong> {{ $data['firstName'] }}</p>
                <p><strong>Last Name:</strong> {{ $data['lastName'] }}</p>
                <p><strong>Email:</strong> <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></p>
                <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
                <p><strong>Message:</strong></p>
                <p>{{ $data['message'] }}</p>
            </td>
        </tr>

        <!-- Footer Section -->
        <tr>
            <td class="footer">
                <div class="social-icons">
                    <a href="https://www.instagram.com/bimboilori_bi">
                        <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram">
                    </a>
                    <a href="https://www.facebook.com/bimbo.a.ilori?mibextid=ZbWKwL">
                        <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook">
                    </a>
                    <a href="https://creators.spotify.com/pod/show/bimbo-ilori">
                        <img src="https://cdn-icons-png.flaticon.com/512/174/174872.png" alt="Spotify">
                    </a>
                    <a href="https://www.linkedin.com/in/bimbo-iiori">
                        <img src="https://cdn-icons-png.flaticon.com/512/145/145807.png" alt="LinkedIn">
                    </a>
                </div>
                <p>&copy; 2025 Bimbo Ilori Programs. All rights reserved. <br>
                <a href="https://www.bimboilori.com">www.bimboilori.com</a></p>
            </td>
        </tr>
    </table>
</body>
</html>
