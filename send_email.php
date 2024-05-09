<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    // Set the recipient email address
    $to = "transworldrelocationspackers@gmail.com";
    
    // Set the email subject
    $subject = "New Inquiry from $name";
    
    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Message:\n$message\n";
    
    // Build the email headers
    $headers = "From: $name <$email>";
     
    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>