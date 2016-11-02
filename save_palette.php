<html>
<body>

<?php 



	$conn = new mysqli('localhost', 'shiny1912', 'tapmine1', 'shiny1912');
	
	if ($conn->connect_errno) {
		die('Connect Error: '.$conn->connect_error);
	}
	
	
	$stmt = $conn->prepare("insert into palette values(?,?,?,?,?)") or die("insert Error: $conn->error");
	
	
	$stmt->bind_param("sssss",$mem_id, $palette_name, $palette_dominant, $palette_full, $img_src);
	//$mem_id = isset($_SESSION['id']) ? $_SESSION['id'] : null;
	$mem_id = isset($_COOKIE['id']) ? $_COOKIE['id'] : null; 
	$palette_name = $_POST['palette'];
	$palette_dominant = $_POST['dominant'];
	$palette_full = $_POST['whole'];
	$img_src = $_POST['imgsrc'];
	
	
	echo "<script>alert('Saved Successfully!'); history.go(-1);</script>";	
	$stmt->execute() or die("insert Error: $conn->error");	
	$stmt->close();
?>	   


</body>
</html>