<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php 
$firstnameErr = $lastnameErr = $emailErr = $genderErr =  "";
$firstname = $lastname = $email = $gender = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $firstnameErr = "Name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
  }
  if (empty($_POST["lastname"])) {
    $lastnameErr = "Name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form action="formulario_1.php" method="post">
  First name:<br>
  <input type="text" name="firstname" value="<?=$firstname ?>">
  <span class="error">* <?php echo $firstnameErr;?></span>
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="<?=$lastname ?>"><br>
  <span class="error">* <?php echo $lastnameErr;?></span><br>
  <input type="radio" name="gender" <?php if ($gender == "male") echo "male" ?>value="male"> Male<br>
  
  <input type="radio" name="gender" <?php if ($gender == "female") echo "female" ?>  value="female"> Female<br> 
  <br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>