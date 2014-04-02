<!doctype html>
<html lang ="nl">
<head>
<title> php script</title>
</head>
<body>
<h3>variabelen</h3>
<?php 
$breedte = 10;
$lengte = 2*$breedte;
$hoogte = 5;
$oppervlakte = $lengte * $breedte;
$volume = $oppervlakte * $hoogte;
$lengtebreedte = $breedte + $lengte;
echo("oppervlakte is:" . $oppervlakte . "<br/>");
echo("volume is:" . $volume . "<br/>");
echo("half volume is:" . $volume / 2 . "<br/>");
echo("lengte plus breedte is:" . $lengtebreedte . "<br/>");
echo($volume == 1000)."<br/>";
?>
</body>
</html>