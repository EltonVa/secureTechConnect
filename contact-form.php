<?php
 
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];

$email_form='securetechconnect.com';

$email_subject=`New form submission $name`;
$email_body= "Uer Name: $name.\n".
            "User Email: $visitor_email.\n".
            "User message: $message.\n";

$to ="firealarmscrt@gmail.com";
$headers ="Form: $email_form\r\n";
$headers ="Reply-To: $visitor_email\r\n";
mail($to, $email_subject, $email_body, $headers);
header("Location: contact us.html");

?>