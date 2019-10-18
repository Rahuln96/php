<?php
 
  $n=7;
  $f=0;
  for($i=2; $i<$n; $i++)
  {
   if($n%$i==0)
   {
	   $f=1;
	   break;
 }
	  }
	  if($f==0)
		  echo "Number is prime";
	  else
		  echo "Number is not prime";
  
  
  
?>