<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Send email or store in database (custom logic)

    echo "Thank you, $name. Your message has been received.";
}
?>
