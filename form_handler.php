<?php
$email = $_POST['email'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$mobileno = $_POST['mobileno'];
$typeofcrime = $_POST['typeofcrime'];
$elaborate = $_POST['elaborate'];

$email_from ="palemeshinfinity@gmail.com";
$email_subject ="New Form Submission";
$email_body ="User email: $email.\n". 
            "User password: $password.\n". 
            "User firstname: $firstname.\n". 
            "User lastname: $lastname.\n". 
            "User gender: $gender.\n". 
            "User date of birth: $dob.\n". 
            "User address: $address.\n". 
            "User city: $city.\n". 
            "User state: $state.\n". 
            "User mobileno: $mobileno.\n". 
            "Type of crime to be reported: $typeofcrime.\n". 
            "Elaborate the crime: $elaborate.\n";
$to ="prynka.b01@gmail.com";
$headers ="From: $email_from \r\n";
$headers. ="Reply-To: $email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: form.html");
?>
