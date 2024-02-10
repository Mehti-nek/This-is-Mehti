<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up email parameters
    $to = 'mahdi.nekuie3@gmail.com'; // Change this to your email address
    $subject = 'New Message from Website';
    $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo json_encode(array('success' => true));
    } else {
        echo json_encode(array('success' => false, 'message' => 'Failed to send email'));
    }
} else {
    echo json_encode(array('success' => false, 'message' => 'Invalid request'));
}
?>
