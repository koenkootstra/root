<h3>php lab 01</h3>
<?php 
$merk = " Thoshiba Sattelite ";
$model = " A100 ";
$os = " Windows XP ";
$vooraad = 80;
$prijs = 999;
$totaal = 0;
$totaal += $prijs;
echo("<table border='1'>" . "<caption>
		<strong>SML laptops</strong></caption>
	<thead>
		<tr><th>merk</th><th>model</th><th>operating system</th><th>vooraad</th><th>prijs</th>
		</thead>
		<tbody>
		<tr>
		<td>" . $merk . "</td>" . 
		"<td>" . $model . "</td>" . 
		"<td>" . $os . "</td>" .
		"<td>" . $vooraad . "</td>" .
		"<td>" . $prijs . "</td>" . 
		"</td>
		<tfoot>
		<tr><td colspan='4'>totaal</td><td>" . $totaal . "</td></tr></table>");
?>