<?php
$name = $_POST["name"] ?? "";
$email = $_POST["email"] ?? "";
$message = $_POST["message"] ?? "";

$ok = mail("your.email@domain.com",
           "Feedback from Starbucks site",
           "Name: $name\nEmail: $email\nMessage: $message");

if ($ok) {
    header("Location: thankyou.php");
} else {
    header("Location: error.php");
}
exit();
