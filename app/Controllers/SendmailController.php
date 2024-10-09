<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class SendmailController
{
    public function index()
    {
        define('SMTP_HOST', 'mail.privateemail.com');
        define('SMTP_AUTH', true);
        define('SMTP_SECURE', 'ssl');
        define('SMTP_PORT', 465);
        define('SMTP_USER', 'info@corepro.net');
        define('SMTP_PASSWORD', 'User$4114');
        define('SMTP_DEBUG', false);
        define('SMTP_FROM', 'info@corepro.net');
        define('SMTP_FROM_NAME', $_ENV['COMPANY_NAME']);
        define('SMTP_REPLY_TO', 'info@corepro.net');
        define('SMTP_REPLY_TO_NAME', 'corepro info');
        $companyName = $_ENV['COMPANY_NAME'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = isset($_POST['name']) ? trim($_POST['name']) : '';
            $email = isset($_POST['email']) ? trim($_POST['email']) : '';
            $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
            $message = isset($_POST['message']) ? trim($_POST['message']) : '';
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo 'Invalid email format.';
                exit;
            }

            $mail = new PHPMailer();

            try {
                // SMTP server configuration
                $mail->isSMTP();
                $mail->SMTPDebug = SMTP_DEBUG;
                $mail->Host       = SMTP_HOST;
                $mail->SMTPAuth   = SMTP_AUTH;
                $mail->SMTPSecure = SMTP_SECURE;
                $mail->Port       = SMTP_PORT;
                $mail->Username   = SMTP_USER;
                $mail->Password   = SMTP_PASSWORD;

                // Sender and recipient settings
                $mail->setFrom(SMTP_FROM, SMTP_FROM_NAME);
                $mail->addAddress(SMTP_REPLY_TO, SMTP_REPLY_TO_NAME);

                // Email content
                $mail->isHTML(true);
                $mail->Subject = "Quote Request: $name";
                $mail->Body = $this->email_body($name, $email, $phone, $message, $companyName);

                $mail->send();

                // save cookies 7 days
                // setcookie('ip', getClientIp(), time() + 60 * 60 * 24 * 7, '/');

                echo json_encode(['success' => true, 'message' => 'Message sent successfully.']);
            } catch (Exception $e) {
                echo json_encode(['success' => false, 'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo]);
            }
        }
    }

    public function  email_body($name, $email, $phone, $message, $companyName)
    {
        $email_body = '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote Request</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
        margin: 0;
        padding: 0;
    }

    .container {
        background-color: #ffffff;
        margin: 20px auto;
        padding: 20px;
        border-radius: 8px;
        max-width: 600px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .header {
        text-align: center;
        background-color: #ff8888;
        color: #ffffff;
        padding: 10px 0;
        border-radius: 8px 8px 0 0;
    }

    .header h1 {
        margin: 0;
        font-size: 24px;
    }

    .content {
        padding: 20px;
        line-height: 1.6;
    }

    .content h2 {
        color: #333;
        font-size: 20px;
    }

    .content p {
        color: #555;
    }

    .content .info {
        margin-bottom: 10px;
    }

    .content .info strong {
        display: inline-block;
        width: 100px;
    }

    .footer {
        text-align: center;
        padding: 10px;
        color: #777;
        font-size: 12px;
    }
    </style>
</head>

<body>
    <div class="container">
    <div class="header">
        <h1>Quote Request</h1>
    </div>
    <div class="content">
        <h2>Hello,</h2>
        <p>A new quote request has been submitted with the following details:</p>
        <div class="info">
        <strong>Name:</strong> ' . $name . '
        </div>
        <div class="info">
        <strong>Email:</strong> ' . $email . '
        </div>
        <div class="info">
        <strong>Phone:</strong> ' . $phone . '
        </div>
        <div class="info">
        <strong>Message:</strong> ' . $message . '
        </div>
        <p>Please get back to the customer as soon as possible.</p>
    </div>
    <div class="footer">
        &copy; ' . date("Y") . ' ' . $companyName . '. All rights reserved.
    </div>
    </div>
</body>

</html>
';

        return $email_body;
    }
}
