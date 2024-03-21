<?php
 
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];

$email_form='securetechconnect.com';

$email_subject=`New form submission from $name`;
$email_body= "Client Name: $name.\n".
            "Client email: $visitor_email.\n".
            "Message: $message.\n";

$to ="firealarmscrt@gmail.com";
$headers ="Form: $email_form\r\n";
$headers ="Reply-To: $visitor_email\r\n";
mail($to, $email_subject, $email_body, $headers);
header("Location: contactus.html");

?>