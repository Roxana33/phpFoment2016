<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Elvis Presley\n";
fwrite($myfile, $txt);
fclose($myfile);
if ($myfile > 1000) {
	echo "ya no puedes escribir en $myfile";
}
?>
</body>
</html>