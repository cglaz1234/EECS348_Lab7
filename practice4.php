<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Grid</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="">
<style>
</style>
<body>

<div class="">
<?php
echo "<table border=\"i\"><tbody>";
echo "<tr><td></td>";

for ($y = 1; $y < $_POST["num"]; $y++) {
	echo "<td>" . $y . "</td>";
}
echo "</tr>";

  for ($y = 1; $y < $_POST["num"]; $y++) {
	  echo "<tr>";
	  echo "<td>" . $y . "</td>";
	  for ($x = 1; $x < $_POST["num"]; $x++) {
		echo "<td>" . $x * $y . "</td>";
	  }
	  echo "</tr>";
  }
  echo "</table></tbody>";
 ?>
</div>

</body>
</html>
