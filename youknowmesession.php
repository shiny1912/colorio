<?php
session_start();
$id = isset($_SESSION['id']) ? $_SESSION['id'] : null;



//shortened form
 session_start();
 $id = isset($_SESSION['id']) ? $_SESSION['id'] : null; 
 
 
 echo $id;
 

 
 
 
 if($id == null){
 	
 	echo "<script>location.href = 'mypalette.php'; </script>"; //make user to login
 	exit();// stop moving to next code
 	
 }

   echo "session id=".session_id();
  
   
?>


<?php 
if(!isset($_SESSION)) echo "Please Login to the page";
else echo "<a href=logout.php>Logout</a>";


?>
