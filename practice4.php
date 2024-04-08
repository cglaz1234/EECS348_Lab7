<?php
if(array_key_exists('submit',$_POST)){
        multiply();
}
function multiply() {
	$result = [[]];
	print "<h1> Multiplication Table </h1>";
	echo "<span style='font-size:32px;'>"."x"."&nbsp&nbsp&nbsp";
	for($i = 1; $i <= $_POST['size']; $i++)
	{
		echo "<span style='font-size:32px;'>".$i."&nbsp&nbsp&nbsp";
		for($x = 1; $x <= $_POST['size']; $x++){ 
			$result[$i-1][$x-1] = $i * $x;}
	}
	echo "<br>";
	for ($n = 1; $n <= $_POST['size']; $n++){
		echo "</br><span style='font-size:32px;'>".$n."&nbsp&nbsp&nbsp";
		for ($m=1;$m <= $_POST['size']; $m++){
			echo "<span style='font-size: 32px;'>".$result[$n-1][$m-1]."&nbsp&nbsp&nbsp";
		}
		echo "<br>";
	}
}
?>
