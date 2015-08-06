<?php  
// destruirla 
//header("Location: loguin.php");
session_start();
  unset($_SESSION["idempleado"]); 
  unset($_SESSION["nombreEmple"]);
  unset($_SESSION["userCARGO"]);
  session_destroy();
  header("Location: index.php");
  exit;
 // echo "<META HTTP-EQUIV=refresh CONTENT=\"1;URL=index.php\">"; 
//  die();
?>