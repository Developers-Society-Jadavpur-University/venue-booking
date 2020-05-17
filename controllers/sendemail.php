<?php
require_once './vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport(SMTP_SERVER, PORT, ENC_TYPE))
    ->setUsername(SENDER_EMAIL)
    ->setPassword(SENDER_PASS);

// Create the Mailer using our created Transport
$mailer = new Swift_Mailer($transport);

function sendVerificationEmail($userEmail, $token)
{
    global $mailer;
    $body = '<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <title>VBMS</title>
      <style>
        .wrapper {
          padding: 20px;
          color: #444;
          font-size: 1.3em;
        }
        a {
          background: #592f80;
          text-decoration: none;
          padding: 8px 15px;
          border-radius: 5px;
          color: #fff;
        }
      </style>
    </head>

    <body>
      <div class="wrapper">
        <p>Thank you for signing up on our VBMS Portal. Please click on the link below to verify your account:.</p>
        <a href="http://localhost/venue-booking/verify_email.php?token=' . $token . '">Verify Email!</a>
      </div>
    </body>

    </html>';

    // Create a message
    $message = (new Swift_Message('Verify your email'))
        ->setFrom(SENDER_EMAIL)
        ->setTo($userEmail)
        ->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);

    if ($result > 0) {
        return true;
    } else {
        return false;
    }
}


function sendpasswordResetEmail($userEmail, $token)
{
    global $mailer;
    $body = '<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <title>VBMS</title>
      <style>
        .wrapper {
          padding: 20px;
          color: #444;
          font-size: 1.3em;
        }
        a {
          background: #592f80;
          text-decoration: none;
          padding: 8px 15px;
          border-radius: 5px;
          color: #fff;
        }
      </style>
    </head>

    <body>
      <div class="wrapper">
        <p>You have successfully submitted a forgot password request on our VBMS Portal. Please click on the link below to Reset your password:.</p>
        
        <a href="http://localhost/venue-booking/reset_passemail.php?token=' . $token . '">Reset Password!</a>
      </div>
    </body>

    </html>';

    // Create a message
    $message = (new Swift_Message('Reset your VBMS Password'))
        ->setFrom(SENDER_EMAIL)
        ->setTo($userEmail)
        ->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);

    if ($result > 0) 
    {
        return true;
    } 
    else 
    {
        return false;
    }
}


