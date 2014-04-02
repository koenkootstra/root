<?php 
$behandel = fopen( "data.csv", "r");

$i = 0;
while ( $record = fgetcsv( $behandel, 100, ",")){
	echo "naam: " . $record[0] . " ";
	echo "achternaam: " . $record[1] . " ";
	echo "leeftijd: " . $record[2] . "<br>";

$mijnarray[$i][0] = $record[0];
$mijnarray[$i][1] = $record[1];
$mijnarray[$i][2] = $record[2];

$i++;

}
echo "<pre>";
print_r($mijnarray);
echo "<pre>";

?>