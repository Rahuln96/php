<?php
$m=90;
$s=95;
$h=80;
$e=70;

$Total=$m+$s+$h+$e;
echo "Total=".$Total."<br/>";
$p=($Total*100)/400;
echo "Percent=".$p;

if($p>90)
{
	echo "A++";
}
else if($p>=80 && $p<=90)
{
	echo "A";	
}
else if ($p>=60 && $p<80)
{
	echo "B";
}	
else if ($p>=40 && $p<60)
{
	echo "c";
}
else
{
	echo "fail";
}


?>