<?php 
if(isset($_POST['btnsubmit'])){
    $to = "bradleywalsh3@gmail.com"; // this is your Email address
    $from = "distribution@immersedrecordings.com"; // this is the sender's Email address
    $subject = "New Immersed Distribution Submission";
    $message = "Test message";
    $headers = "From:" . $from;

    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you.";
    }
?>