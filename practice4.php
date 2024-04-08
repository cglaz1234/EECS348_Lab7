<html>
<body>

<?php
$sz = $_POST["size"]; 
echo "<table>";
for ($i=1; $i <= $sz; $i++) { 
    echo "<tr> \n";
    
    for ($j=1; $j <= $sz; $j++) { 
        $n = $i * $j;
        
        echo "<td>$n</td> \n";
    }
    
    echo "</tr>";
}

echo "</table>";

?>
</body>
</html>
