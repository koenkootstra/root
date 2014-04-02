<?php 
$gewerkteuuren = 41;
$uurtarief = 15.00;
$bruto = $gewerkteuuren * $uurtarief;

if ($gewerkteuuren > 40)
{
	$bonus = 90.00;
	echo ("uw salaris plus bonus is:"."€".($bruto+$bonus));
}
else 
{
	echo ("uw salaris is: " . "&euro;" . $bruto);
}
?>
