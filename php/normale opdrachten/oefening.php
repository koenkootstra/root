<?php 
$naam = array(
		array(
				"herman",
				"12"),
		array(
				"john",
				"14"));

echo("<table border='1'> " . "<caption> <strong> Register </strong> </caption>
		<thread><tr><th>Naam</th><th>Leeftijd</th></thread><tbody>");

foreach ($naam as $value){
	echo "<tr>";
	foreach ($value as $subvalue){
		echo "<td>" . $subvalue . "</td>";
	}
	echo "</tr>";
}

?>