<?php 
$mijnleeftijd = 19;
$nix18 = 18;
$geld = 20;
$jack = 18;
$bday= 29;
$vandaag = 30;

echo "komt een man bij de kassa...";
if ( $mijnleeftijd >= $nix18 ){
	echo "Hij mag drank kopen!";
}
else {
	echo "hij mag deze drank niet kopen!!";
}

echo "is hij jarig geweest?";
if ($bday >= $vandaag){
	echo "gefeliciteerd";
}
else {
	echo "jammer joh";
}
echo "heeft hij genoeg geld?";
if ( $geld >= $jack ){
	echo "hij heeft genoeg op zak";
}
else {
	echo "hij moet meer geld mee nemen volgende keer";
}

echo "hij verlaat de winkel";
?>