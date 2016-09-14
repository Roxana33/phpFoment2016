<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 Tu nombre es: <?php echo $_POST["firstname"]; ?>
 Tu apellido es: <?php echo $_POST["lastname"]; ?>
 Tu dirección es: <?php echo $_POST["email"]; ?>
 Tu genro es: <?php echo $_POST["gender"]; ?>
?>