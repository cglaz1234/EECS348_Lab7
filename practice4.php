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
    // Check if $_POST["num"] is set and not empty
    if(isset($_POST["num"]) && !empty($_POST["num"])) {
        // Echo the table structure
        echo "<table border=\"1\"><tbody>";
        echo "<tr><td></td>";
        for ($y = 1; $y <= $_POST["num"]; $y++) {
            echo "<td>" . $y . "</td>";
        }
        echo "</tr>";
        for ($y = 1; $y <= $_POST["num"]; $y++) {
            echo "<tr>";
            echo "<td>" . $y . "</td>";
            for ($x = 1; $x <= $_POST["num"]; $x++) {
                echo "<td>" . $x * $y . "</td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
    } else {
        // If $_POST["num"] is not set or empty, display an error message
        echo "Please provide a valid number.";
    }
    ?>
</div>

</body>
</html>
