<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Secure Inputs
    $name        = htmlspecialchars(trim($_POST['name']));
    $company     = htmlspecialchars(trim($_POST['company']));
    $email       = htmlspecialchars(trim($_POST['email']));
    $phone       = htmlspecialchars(trim($_POST['phone']));
    $requirement = htmlspecialchars(trim($_POST['requirement']));
    $message     = htmlspecialchars(trim($_POST['message']));

    // Recipients
    $to = "info@swarajbearings.com,sales@swarajbearing.com,infotechmediaenquiry@gmail.com";

    // Subject
    $subject = "New Inquiry From Website";

    // Email Body
    $body = "
New Website Inquiry

-----------------------------------
Full Name : $name
Company   : $company
Email     : $email
Phone     : $phone
Requirement / Part No. : $requirement

Message:
$message
-----------------------------------
";

    // Headers
    $headers = "From: Website Inquiry <info@swarajbearings.com>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send Email
    if(mail($to, $subject, $body, $headers)) {

        echo "<script>
                alert('Inquiry submitted successfully.');
                window.location.href='contact.html';
              </script>";

    } else {

        echo "<script>
                alert('Failed to send inquiry. Please try again.');
                window.location.href='contact.html';
              </script>";
    }

} else {

    header("Location: contact.html");
    exit();

}
?>