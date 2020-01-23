<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: clareaccountinggroup.com';
    $to = 'aaronclare88@gmail.com';
    $subject = 'Customer Inquiry';
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    $header = "From: noreply@example.com\r\n";
    $header.= "MIME-Version: 1.0\r\n";
    $header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $header.= "X-Priority: 1\r\n";

    $status = mail($to, $subject, $message, $header);

    if($status)
    {
        echo '<p>Your mail has been sent!</p>';
    } else {
        echo '<p>Something went wrong. Please try again!</p>';
    }
?>
