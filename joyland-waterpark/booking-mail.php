<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST['bName']));
    $phone   = htmlspecialchars(trim($_POST['bPhone']));
    $email   = htmlspecialchars(trim($_POST['bEmail']));
    $package = htmlspecialchars(trim($_POST['bPackage']));
    $date    = htmlspecialchars(trim($_POST['bDate']));
    $persons = htmlspecialchars(trim($_POST['bPersons']));
    $message = htmlspecialchars(trim($_POST['bMessage']));

    $to      = "info@joylandwaterpark.co.in,info@infotechmedia.in";
    $subject = "New Booking Request From Website";

    $body = "
New Booking Request
-----------------------------------
Full Name         : $name
Phone Number      : $phone
Email             : $email
Package           : $package
Visit Date        : $date
Number of Persons : $persons
Message           : $message
-----------------------------------
";

    // FROM me domain ki email daalo - GMAIL NAHI
    $headers  = "From: Booking Request <info@joylandwaterpark.com>\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }

} else {
    http_response_code(403);
    exit();
}
?>