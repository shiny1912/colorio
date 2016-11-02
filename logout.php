<?php

if(!isset($_SESSION)) session_start();

unset($_SESSION['id']);
"<script>
 	alert('Logout Successful!');
 	location.href = 'mypalette.php';
 	</script>"; 
?>
 
 <a href = mypalette.php> Logout Successful. </a>
 
 