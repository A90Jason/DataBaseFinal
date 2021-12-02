<?php
$to_email = "derrickkeough@yahoo.com";
$subject = "testy test";
$message = "The quick brown fox jumps over the lazy dog";
$headers = "From: derrickkeough@gmail.com";
$result = mail($to_email, $subject, $message, $headers);

if ($result) {
    echo "success";
} else {
    echo "failed";
}
?>

<!-- 
    gmail account created for sending emails: 
        user: cop4710finalproject@gmail.com
        pass: PmkesYi9YfTvN2Y
 -->