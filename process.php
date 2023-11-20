<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $attend = $_POST['attend'];

    // Here, you can process the received data as you need, such as sending emails or storing in a database
    // For example, sending an email confirmation
    $to = "your_email@example.com";
    $subject = "Phản Hồi Dự Tiệc";
    $message = "Thông tin phản hồi từ: $name\nEmail: $email\nSẽ tham gia: $attend";
    $headers = "From: $email";

    // Uncomment the line below to send the email (ensure the email server is properly configured)
    // mail($to, $subject, $message, $headers);

    // You might also want to redirect the user after the form submission
    // header("Location: thank_you_page.html");
    // exit;
}
?>
