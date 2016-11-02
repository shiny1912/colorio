<?php

 $id = $_POST['id'];
 $pwd = $_POST['password'];
 
 if( $id == $pwd ){
 	session_start();
 	$_SESSION['id'] = $id;
 	setcookie("id", $id, time() + 3600 * 24);
 	
 	echo 
 	"<script>
 	alert('Login Successful');
 	location.href = 'mypalette_list.php';
 	</script>		
 			
 			
 			";
 	
 	
 	
 	
 } else {
 	
 	echo "
 	<script>
 		alert('Please check your ID and Password');
 		
 		history.go(-1);
 			
 			</script>		
 			
 			
 			";
 }
 
 
 echo $id;
 echo $pwd;
 





?>