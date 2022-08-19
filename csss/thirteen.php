<?php
$var1=50;
$var2=50;
function mysum()
{
	$GLOBALS["VAR2"]=$GLOBALS["var1"]+$GLOBALS["var2"];

}
mysum();
echo "the sum is  $VAR2";
?>