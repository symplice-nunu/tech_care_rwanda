<?php

if(isset($_POST["submit"])) {
    $mailto = "symplicenunu@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = "Your message submitted successfully";
    $message = "Client Name: ".$name. "Wrote the following message". "\n\n". $_POST['message'];
    $message2 = "Dear ".$name. "\n\n"."Thank you for contacting us! We'll get back to you shortly";
    $headers = "From: ". $from;
    $headers2 = "From: ". $mailto;
    $result = mail($mailto, $subject, $message, $headers);
    $result2 = mail($from, $subject2, $message2, $headers2);
    if($result){
        echo '<script type="text/javascript">alert("Message sent. Thank you! We will contact you shortly.")</script>';
    }else{
        echo '<script type="text/javascript">alert("Submission Failed! Try again Later.")</script>';
    }

   
}

?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact-us</title>
</head>

<body>
    <form method="post" action="">
        <label>Name:</label>
        <input type="text" name="name">

        <label>Email address:</label>
        <input type="email" name="email">
        <label>Subject</label>
        <input type="text" name="subject">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>

</body>

</html>