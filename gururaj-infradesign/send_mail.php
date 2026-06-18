<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars(trim($_POST['name']    ?? ''));
    $email   = htmlspecialchars(trim($_POST['email']   ?? ''));
    $phone   = htmlspecialchars(trim($_POST['phone']   ?? ''));
    $country = htmlspecialchars(trim($_POST['country'] ?? ''));
    $product = htmlspecialchars(trim($_POST['product'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (!$name || !$email || !$phone || !$message) {
        echo json_encode(['status' => 'error', 'message' => '❌ Please fill all required fields.']);
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => '❌ Invalid email address.']);
        exit;
    }

    $to      = "niuwyinfradesigns@gmail.com";
    $subject = "New Inquiry - Gururaj Infradesigns";

    $body = "
    New Contact Inquiry - Gururaj Infradesigns
    ==========================================
    Name    : $name
    Email   : $email
    Phone   : $phone
    Country : $country
    Product : $product

    Requirement Details:
    $message
    ";

    $headers  = "From: Gururaj Infradesigns <niuwyinfradesigns@gmail.com>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "BCC: info@infotechmedia.in\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(['status' => 'success', 'message' => '✅ Thank you! Your inquiry has been sent successfully.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => '❌ Mail not sent. Please try again.']);
    }

} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid Request']);
}
?>
