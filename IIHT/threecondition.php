<?php
//three condition
$a=17;
$b=15;
$c=5;

if($a>$b && $a>$c)
{
	echo $a,"is larger";
}
else if($b>$c && $b>$a)
{
	echo $b, "is larger";
}
else
{
	echo $c, "is larger";
}


?>