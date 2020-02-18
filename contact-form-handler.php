<?php
    $name = $_POST[`name`];
    $visitor_email = $_POST[`mail`];
    $message = $_POST[`message`];

    $email_from = `assproohrana@gmail.com`;
    $email_subject = "Заказ с сайта";
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                     "User Message: $message.\n";

    $to = "sprotsenko1985@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers = "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");                 
?>