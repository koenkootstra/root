<?php 
$ding = "text";
$ding1 = 5;
$ding2 = 2;
$ding3 = 5.35;
$ding4 = array("swaggerboyz");

echo gettype ($ding);
echo gettype ($ding1);
echo gettype ($ding2);
echo gettype ($ding3);
?>

<pre><?php print_r($ding . "<br/>" . $ding1 . "<br/>" . $ding2 . "<br/>" . $ding3 . "<br/>");?></pre>