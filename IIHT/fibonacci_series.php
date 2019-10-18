<?php
  $f=0;
  $s=1;
  $next="";
  
  for($i=0; $i<=10; $i++)
  {   
    if ($i<2)
	{
		echo $i. "&nbsp";
	}
	else {
		$next = $f+$s;
		echo $next;
		$f=$s;
		$s=$next;
	}
}


?>