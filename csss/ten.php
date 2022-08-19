<?php
$myvar=65;
function function1()
{
   global $myvar;
echo "global variable is $myvar";
}


function1();
?>