<h3>php lab 02</h3>
<?php 
$thoshiba["merk"] = " Thoshiba Sattelite ";
$thoshiba["model"] = " A100 ";
$thoshiba["os"] = " Windows XP ";
$thoshiba["vooraad"] = 0;
$thoshiba["prijs"] = 999;
$prijs = $thoshiba["prijs"];

$acer["merk"] = " acer aspire ";
$acer["model"] = " B100 ";
$acer["os"] = " Windows XP ";
$acer["vooraad"] = 80;
$acer["prijs"] = 888;
$prijs1 = $thoshiba["prijs"];

$hp["merk"] = " hp  ";
$hp["model"] = " C100 ";
$hp["os"] = " Windows XP ";
$hp["vooraad"] = 0;
$hp["prijs"] = 777;
$prijs2 = $thoshiba["prijs"];

$totaal = $prijs + $prijs1 + $prijs2;

$toshiba["Final"] =($toshiba["voorraad"] > 0 ? "Voorraad" : "Niet in voorraad");
 $acer["Final"] =($acer["voorraad"] > 0 ? "Voorraad" : "Niet in voorraad");
  $hp["Final"] =($hp["voorraad"] > 0 ? "Voorraad" : "Niet in voorraad");

echo("<table border='1'>" . "<caption>
		<strong>SML laptops</strong></caption>
	<thead>
		<tr><th>merk</th><th>model</th><th>operating system</th><th>vooraad</th><th>prijs</th>
		</thead>
		<tbody>
		<tr>
		<td>" . $thoshiba["merk"] . "</td>" . 
		"<td>" . $thoshiba["model"] . "</td>" . 
		"<td>" . $thoshiba["os"] . "</td>" .
		"<td>" . $thoshiba["Final"] . "</td>" .
		"<td>" . $thoshiba["prijs"] . "</td>" . 
		"</td>
		<tr>
		<td>" . $acer["merk"] . "</td>" . 
		"<td>" . $acer["model"] . "</td>" . 
		"<td>" . $acer["os"] . "</td>" .
		"<td>" . $acer["Final"] . "</td>" .
		"<td>" . $acer["prijs"] . "</td>" . 
		"</td>
		<tr>
		<td>" . $hp["merk"] . "</td>" . 
		"<td>" . $hp["model"] . "</td>" . 
		"<td>" . $hp["os"] . "</td>" .
		"<td>" . $hp["Final"] . "</td>" .
		"<td>" . $hp["prijs"] . "</td>" . 
		"</td>
		<tfoot>
		<tr><td colspan='4'>totaal</td><td>" . $totaal . "</td></tr></table>");
?>