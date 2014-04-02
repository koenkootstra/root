<?php 
function drank($leeftijd,$prijs){
	
	echo "komt een man bij de kassa... ";
	if ( $leeftijd >= 18 ){
		echo "Hij mag drank kopen! ";
	}
	else {
		echo "hij mag deze drank niet kopen!! ";
	}
	echo "heeft hij genoeg geld?";
	if ( $prijs >= 14.39){
		echo "hij heeft genoeg op zak ";
	}
	else {
		echo "hij moet meer geld mee nemen volgende keer ";
	}
}
drank (19,15)
?>