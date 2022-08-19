<?php
$var1=85;
$var2=50;
function mysum()
{
	global $var1,$var2;
	$var3=$var1+$var2;
	echo $var3;
}
mysum();

?>