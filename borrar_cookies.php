<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
// set the expiration date to one hour ago
setcookie("user", "", - 1, "/" );
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>
<br/>
<a href="ej_cookies.php">Volver</a>
</body>
</html>
</body>
</html>