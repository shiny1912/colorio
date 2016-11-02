<!-- uses DB -->

<html>
<body>

<?php 

	$conn = new mysqli('localhost', 'shiny1912', 'tapmine1', 'shiny1912');
	
	if ($conn->connect_errno) {
		die('Connect Error: '.$conn->connect_error);
	}
	
	
	$stmt = $conn->prepare("insert into member values(?,?,?)") or die("insert Error: $conn->error");
	
	
	$stmt->bind_param("sss",$mem_id, $mem_name, $mem_pwd);
	
	$mem_id = $_POST['mem_id'];
	$mem_name = $_POST['mem_name'];
	$mem_pwd = $_POST['mem_pwd'];
	
	
		
	$stmt->execute() or die("insert Error: $conn->error");	
	$stmt->close();
?>	   


Name : <?=$mem_name?><br/>
ID : <?=$mem_id?><br/>
Password : <?=$mem_pwd?><br/>



<a href=mypalette.php> 가입완료 </a>  

</body>
</html>