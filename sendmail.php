<?php
if(isset($_POST['submit'])){
    $to = "bansal.kashish6@gmail.com"; // this is your Email address
    $from = $_POST['InputEmail']; // this is the sender's Email address
    $first_name = $_POST['InputName'];
    $subject = $_POST['InputSubject'];
    $subject2 = $_POST['InputSubject'];
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message-text'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message-text'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>
<a href="./index.html">Go Back</a>