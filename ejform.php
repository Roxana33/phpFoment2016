<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
	$user = $_GET ["user"];
	$password = $_GET ["password"];


$a=file_get_contents ("password");
print_r (explode(" ",$a));

}

?>

</body>
</html>