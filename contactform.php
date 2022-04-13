<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "admin@mumbosmusicbox.com";

    $email_subject = "Mumbo's Musicbox - New Message!";

    $email_body = "User Name: $name. \n".
        "User Email: $email.\n".
            "User Message: $message.\n";

$to = "admin@mumbosmusicbox.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header ("Location: Contact.html");
?>