<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "jaiveerbhullar2015@gmail.com"; // Replace with your email
    $subject = "New Contact Form Submission";

    $body = "
    Name: $name

    Phone: $phone

    Email: $email

    Message:
    $message
    ";

    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){
        echo "<script>
                alert('Message sent successfully!');
                window.location='contact.html';
              </script>";
    } else {
        echo "<script>
                alert('Failed to send message.');
                history.back();
              </script>";
    }
}
?>