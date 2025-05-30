<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
    <style>
        /* Reset Styles */
        body, table, td, a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }
        table {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }
        img {
            border: 0;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        /* General Styles */
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
            background-color:rgb(255, 221, 0);
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
            padding: 10px;
            font-size: 12px;
            color: #999;
        }
        .footer a {
            color: #5d115d;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Email Container -->
    <table class="email-container" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <!-- Header Section -->
            <td class="header">
                <img src="https://bimboilori.com/assets/img/bi-logo-full2.png"  alt="Bimbo Ilori Logo">
            </td>
        </tr>
        <tr>
            <!-- Content Section -->
            <td class="content">
                <h2>New Contact Message</h2>
                <p><strong>Name:</strong> {{ $data['name'] }}</p>
                <p><strong>Email:</strong> <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></p>
                <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
                <p><strong>Message:</strong></p>
                <p>{{ $data['message'] }}</p>
            </td>
        </tr>
        <tr>
            <!-- Footer Section -->
            <td class="footer">
                &copy; 2025 Bimbo Ilori Programs. All rights reserved. <span class="text-dark"><a
                href="www.bimboilori.com">www.bimboilori.com</a></span></p>
            </td>
        </tr>
    </table>
</body>
</html>