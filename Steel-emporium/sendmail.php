<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 🔐 Secure Inputs
    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone   = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $product = htmlspecialchars(trim($_POST['product'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // ✅ Validation
    if (!$name || !$email || !$phone || !$message) {
        echo json_encode(['status' => 'error', 'message' => '❌ Please fill all required fields.']);
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => '❌ Invalid email address.']);
        exit;
    }

    // 📩 Main Recipient
    $to = "sales@steelemporium.co.in";
    $subject = "New Product Enquiry - Steel Emporium";

    // 📄 Email Body
    $body = "
    New Contact Enquiry
    Name: $name
    Email: $email
    Phone: $phone
    Product: $product
    Message:
    $message
    ";

    // 📧 Headers
    $headers = "From: Steel Emporium <sales@steelemporium.co.in>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "BCC: info@infotechmedia.in\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // 🚀 Send Mail
    if (mail($to, $subject, $body, $headers)) {
        echo json_encode([
            'status' => 'success', 
            'message' => 'Thank you! Your enquiry has been sent successfully.'
        ]);
    } else {
        echo json_encode([
            'status' => 'error', 
            'message' => 'Mail not sent. Please try again.'
        ]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid Request']);
}
?>