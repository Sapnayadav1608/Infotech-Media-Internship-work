<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 🔐 Secure input
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $phone   = htmlspecialchars(trim($_POST['phone']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // 📩 Main Recipient
    $to = "sales@jmgraphite.in";

    // 📄 Email Body
    $body = "
New Contact Enquiry

Name: $name
Email: $email
Phone: $phone
Subject: $subject

Message:
$message
";

    // 📧 Headers
    $headers = "From: JM Graphite <carbonhome@hotmail.com>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "BCC: info@infotechmedia.in\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // 🚀 Send Mail
    if (mail($to, $subject, $body, $headers)) {

        echo "<script>
                alert('Enquiry sent successfully!');
                window.location.href='contact.php';
              </script>";

    } else {

        echo "<script>
                alert('Mail not sent. Please try again.');
                window.history.back();
              </script>";

    }

} else {

    echo "Invalid Request";

}
?>