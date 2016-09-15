<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$d=strtotime("+20 days");
echo date("Y-m-d h:i:sa", $d) . "<br>";
echo date("l", $d);
?>

</body>
</html>