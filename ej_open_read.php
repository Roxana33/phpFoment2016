<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
$counter=0;
while(!feof($myfile)) {
	$a = fgets($myfile);
	$counter++;	
if (strpos("$a", "Vector")== TRUE) {
echo "Está encontrado ";
echo "La linea $counter ";
}
}
 

fclose($myfile);
?>