<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["firstname"]);
  }
  if (empty($_POST["lasttname"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["lastname"]);
  }


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

 echo "Tu nombre es: $firstname <br/>"; 
 echo "Tu apellido es: $lastname<br/>"; 
 echo "Tu genro es: $gender";
?>