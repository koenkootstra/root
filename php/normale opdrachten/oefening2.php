<?php 
class Auto{
	public $merk;
	public $kleur;
	public $brandstof;
	function sound(){
		echo "vroem";
	}
}
$ford = new Auto;
$ford->merk="ford";
$ford->kleur="rood";
$ford->brandstof="diesel";

echo "<pre>";
print_r($ford);
echo "<pre>";
$ford->sound();
?>