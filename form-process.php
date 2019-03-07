<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$company = $_POST["company"];
$city = $_POST["city"];

$EmailTo = "rajesh@risoninternational.co.in,durgesh@webanaya.com,info@hnhtwenty.com";
$EmailFrom = "info@hnhtwenty.com";
$Subject = "Zuukra - You have received New Enquiry";

// prepare email body text
$body .= "Name: ";
$body .= $name;
$body .= "\n";

$body .= "Email: ";
$body .= $email;
$body .= "\n";

$body .= "Phone: ";
$body .= $phone;
$body .= "\n";

$body .= "Company: ";
$body .= $company;
$body .= "\n";

$body .= "City: ";
$body .= $city;
$body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $body, "From:".$EmailFrom);

// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}

?>
