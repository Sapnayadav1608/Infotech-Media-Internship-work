<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Secure Inputs
    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $phone   = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Recipient Email
    $to = " info@joylandwaterpark.co.in,info@infotechmedia.in";

    // Email Subject
    $mail_subject = "New Contact Form Inquiry - " . $subject;

    // Email Body
    $body = "
New Contact Form Inquiry

-----------------------------------
Name    : $name
Phone   : $phone
Email   : $email
Subject : $subject

Message:
$message
-----------------------------------
";

    // Headers
    $headers = "From: Website Inquiry <info@joylandwaterpark.co.in>\r\n";

    if (!empty($email)) {
        $headers .= "Reply-To: $email\r\n";
    }

    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send Mail
    if (mail($to, $mail_subject, $body, $headers)) {

        echo "<script>
                alert('Message sent successfully.');
                window.location.href='contact.html';
              </script>";

    } else {

        echo "<script>
                alert('Failed to send message. Please try again.');
                window.location.href='contact.html';
              </script>";
    }

} else {

    header('Location: contact.html');
    exit();
}
?>