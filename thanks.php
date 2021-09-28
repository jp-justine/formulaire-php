<?php

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$firstNameErr = $emailErr = $lastNameErr = $messageErr = $subjetsErr = $phoneErr = "";
$firstName = $email = $lastName = $message = $subjets = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstName"])) { 
        $firstNameErr = "firstName is required";
  } else {
        $firstName = test_input($_POST["firstName"]);
  }
  if (empty($_POST["lastName"])) {
        $lastNameErr = "lastName is required";
  } else {
     $lastName = test_input($_POST["lastName"]);
  }
  if (empty($_POST["email"])) {
        $emailErr = "Email is required";
  } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
  } 
  if (empty($_POST["message"])) {
        $messageErr = "message is required";
  } else {
        $message = test_input($_POST["message"]);
  }
}
if ($firstNameErr or $emailErr or $lastNameErr or $messageErr or $subjetsErr or $phoneErr ){
      echo "$firstNameErr  $emailErr  $lastNameErr  $messageErr  $subjetsErr  $phoneErr";
 } else {
  echo 'merci ' .$firstName.$lastName.
     ' de nous avoir contacté à propos de ' .$subjets. 
     ' un de nos conseiller vous contactera soit à 
     l’adresse ' .$email. 
     ' ou par téléphone au ' .$phone. 
     ' dans les plus brefs délais pour traiter votre demande : ' 
     .$message;
}