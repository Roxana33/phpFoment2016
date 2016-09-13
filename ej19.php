<?php
function familyName($fname, $year) {
	$year = date("Y")-$year;
    echo "$fname Refsnes. Born in $year. He has $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");
?>
