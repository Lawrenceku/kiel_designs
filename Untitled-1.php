<?php

// Recipient's email address
$to = 'recipient@example.com';

// Subject of the email
$subject = 'Test Email';

// HTML content of the email
$htmlContent = '
    <html>
    <head>
        <title>Test Email</title>
    </head>
    <body>
        <h1>Hello World!</h1>
        <p>This is a test email with <b>HTML</b> content.</p>
    </body>
    </html>';

// Headers for the email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: sender@example.com' . "\r\n";

// Send the email
mail($to, $subject, $htmlContent, $headers);

?>
