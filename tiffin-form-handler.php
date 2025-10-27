<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name       = htmlspecialchars($_POST['name']);
    $phone      = htmlspecialchars($_POST['phone']);
    $preference = htmlspecialchars($_POST['preference']);
    $plan       = htmlspecialchars($_POST['plan']);

    $to = "rdigininja@gmail.com";  // 🔁 Change to your actual email
    $subject = "New Tiffin Service Inquiry";

    $message = "You received a new tiffin service inquiry:\n\n";
    $message .= "Name: $name\n";
    $message .= "Phone: $phone\n";
    $message .= "Meal Preference: $preference\n";
    $message .= "Selected Plan: $plan\n";

    $headers = "From: no-reply@yourdomain.com";  // 🔁 use a domain-based email if possible

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your request has been submitted.";
    } else {
        echo "Oops! Something went wrong, please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>