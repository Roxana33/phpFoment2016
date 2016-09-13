<?php 
$num= array(2, 3, 7, 9, 11, 12, 14, 15, 17, 18); 

foreach ($num as $value) {
if ($value % 2 != 0 && $value > 5 && $value % 5 == 0 )
    echo "el $value es impar y mayor de 5 y multiple de 5<br>";
}

?>