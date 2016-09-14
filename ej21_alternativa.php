<!DOCTYPE html>
<html>
<body>

<?php
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
    
for ($row = 0; $row < 4; $row++) :
  if ($cars [$row][1]<20) :?>
  <p><b>Row number <?php echo $row ?></b></p>
  <ul>
  for ($col = 0; $col < 3; $col++) :
   <li> <?php .$cars[$row][$col].</li>
  }
  </ul>
}
}
?>

</body>
</html>