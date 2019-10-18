<?php
 
 // $idd= $_POST['id'];
  #  $p= $_POST['pass'];
	
	//$idd= $_GET['id'];
   // $p= $_GET['pass'];
   $idd= $_REQUEST['id'];
    $p= $_REQUEST['pass'];
 
  
  if($idd==$p)
  {
	  echo "Login sucessfully";
  }
  else
  { 
echo "check id and password";
}
?>