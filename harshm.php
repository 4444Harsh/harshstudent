<?php
if(isset($_POST['submit'])){
    $to = "guptaharshbly@gmail.com";
    $subject = "New Student ID";
    $studentID = $_POST['student_id'];
    $message = "Student ID: ".$studentID;
    $headers = "From: harshbhaiguptably@gmail.com" . "\r\n" .
               "Reply-To: harshbhaiguptably@gmail.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // SMTP प्रमाणीकरण सेट करें
    ini_set('SMTP', 'smtp.elasticemail.com');
    ini_set('smtp_port', 2525);

    // ईमेल भेजें
    if(mail($to, $subject, $message, $headers)){
        echo "Email sent successfully.";
    } else {
        echo "Failed to send the email! Please try again later.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Send Student ID</title>
</head>
<body>
    <h2>Send Student ID</h2>
    <form method="POST" action="">
        <label for="student_id">Student ID:</label>
        <input type="text" name="student_id" id="student_id" required>
        <br>
        <input type="submit" name="submit" value="Send">
    </form>
</body>
</html>
v