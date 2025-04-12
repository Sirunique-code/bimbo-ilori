<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Subscribing!</title>
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
            background-color:rgb(239, 239, 239);
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
            max-width: 300px;
            height: auto;
        }
        .content {
            padding: 20px;
            line-height: 1.6;
        }
        .content h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .content p {
            font-size: 16px;
            margin-bottom: 20px;
        }
        .button {
            display: inline-block;
            background-color: #5d115d;
            color: #ffffff !important;
            font-size: 16px;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 4px;
        }
        .footer {
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #999;
        }
        .footer a {
            color:rgb(202, 202, 202);
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
                <img src="https://bimboilori.com/assets/img/bi-logo-full2.png" alt="Bimbo Ilori Logo">
            </td>
        </tr>
        <tr>
            <!-- Content Section -->
            <td class="content">
                <h1>Hello!</h1>
                <p>Thank you for subscribing to our newsletter. We're excited to have you on board!</p>
                <p>You'll be the first to know about our latest news, updates, and exclusive offers.</p>
                <!-- <p>If you no longer wish to receive emails from us, you can <a href="{{ url('/unsubscribe?email=' . $email) }}">unsubscribe here</a>.</p> -->
                <p style="text-align: center;">
                    <a href="https://bimboilori.com" class="button text-white">Visit Our Website</a>
                </p>
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
    <p style="font-size: 14px; color: #999;">
    This is an automated message sent from <strong>no-reply@bimboilori.com</strong>. Please do not reply to this email. If you have any questions, contact us at <a href="mailto:contact@bimboilori.com">contact@bimboilori.com</a>.
</p>
</body>
</html>