<?php

 $f=1;
 for($i=2; $i<=50; $i++)
 { 
   for($j=2; $j<=$i/2; $j++)
   {
	   if ($i%$j==0)
	   {
	$f++;	  
   }
 }

 if($f==1){
	echo $i."&nbsp";
	}
	$f=1;
	}
?>