
<?php
$cookie_name2 = "contador";
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
if(!isset($_COOKIE[$cookie_name2])) {
	echo "Bienvenido";
	setcookie($cookie_name2, 1, time() + (86400 * 30), "/");
}
else {
	setcookie($cookie_name2, $_COOKIE[$cookie_name2]+1, time() + (86400 * 30), "/");
}
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
<br/>
<a href="borrar_cookies.php">Borrar cookies</a><br/>
<?php
if(isset($_COOKIE[$cookie_name2])) {
    echo "Número de visitas: " .$_COOKIE[$cookie_name2];
}

?>
</body>
</html>