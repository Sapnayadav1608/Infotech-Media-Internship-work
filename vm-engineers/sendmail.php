<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $name        = htmlspecialchars(trim($_POST['name']));
    $company     = htmlspecialchars(trim($_POST['company']));
    $email       = htmlspecialchars(trim($_POST['email']));
    $phone       = htmlspecialchars(trim($_POST['phone']));
    $requirement = htmlspecialchars(trim($_POST['requirement']));
    $message     = htmlspecialchars(trim($_POST['message']));


    $to = "vmengineers2011@gmail.com,info@infotechmedia.in";


    $subject = "New Website Inquiry";


    $body = "

New Website Inquiry

--------------------------------

Name : $name
Company : $company
Email : $email
Phone : $phone
Service Required : $requirement


Message:

$message


--------------------------------
";


    $headers  = "From: Website Inquiry <vmengineers2011@gmail.com>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";


    if(mail($to,$subject,$body,$headers)){


        echo "<script>
        alert('Inquiry submitted successfully.');
        window.location='contact.html';
        </script>";


    }else{


        echo "<script>
        alert('Mail sending failed.');
        window.location='contact.html';
        </script>";

    }


}else{


header("Location: contact.html");
exit();

}

?>