<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $visitor_email = $_POST['Email'];
    $subject = $_POST['subject'];
    $Message = $_POST['Message'];

    $Email_form = 'Mandalonesjeth748@gmail.com';

    $Email_subject = 'New Form Submission';

    $Email_body = "User Name: $name\n".
                    "User Email: $visitor_email\n".
                    "Subject: $subject\n".
                    "User Message: $Message\n";

    $to = 'Mandalonesjeth748@gmail.com';

    $headers = "From: $Email_form \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $Email_subject, $Email_body, $headers);

    header("Location: contact.html");
    exit();
}
?>
