<!-- DB -->

<html>

<head>
   
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  
     <!-- FONT      –––––––––––––––––––––––––––––––––––––––––––––––––– -->
      <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
      <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Rubik:500" rel="stylesheet">
  
   <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
       font-family: 'Poppins', sans-serif;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
    
    nav {
         background: #fff;
    }
    
    .nav-wrapper a {
     color: #000;
    }
    
    
    #brandlogo{
    
    font-family: 'Rubik', sans-serif;
    color: black;
    }
    
    a:hover{
    text-decoration : none;
    }
 
    input:focus{
     backgroud-color: #000000;
     
    }
    
    li a {
    
     font-family : 'Poppins', sans-serif;
    
    }
    
    .btn{
    
    background-color: #333333;
    }
    
    
    td, th {
    text-align: center;
    vertical-align: middle;
}



  </style>
  
  
  
  
</head>

<body>
<?php 
if(!isset($_SESSION)) session_start();
$id = isset($_SESSION['id']) ? $_SESSION['id'] : null;
$id = isset($_COOKIE['id']) ? $_COOKIE['id'] : null;



?>

<div style="float:right;background-color:#ffffff">
<h6 style="float:right" > <?=$id?>, Welcome to Colorio! </h6></div>
<div><a href="logout.php" style="float:right">Logout</a> 
</div>

<!-- materialized nav -->
<nav class="white">
    <div class="nav-wrapper">  
      
      <a href="#!" class="brand-logo center" id="brandlogo"><img style="color:#ffffff;width:35px;height:35px" src="images/logo.jpg"></img>  Colorio</a>  
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i style="color:#000000" class="material-icons">menu</i></a> 
      <ul class="right hide-on-med-and-down">
      
        <li><a href="search_fancy.php">SEARCH BY KEYWORDS</a></li>
        <li><a href="searchbycolor.php">SEARCH BY COLOR</a></li>
        <li><a href="mypalette_list.php">MY PALETTE</a></li>
        <li><a href="#">ABOUT</a></li>
       
      </ul>
      
      <ul class="side-nav" id="mobile-demo">
       <li><a href="search_fancy.php">SEARCH BY KEYWORDS</a></li>
        <li><a href="searchbycolor.php">SEARCH BY COLOR</a></li>
        <li><a href="mypalette_list.php">MY PALETTE</a></li>
        <li><a href="#">ABOUT</a></li>
      </ul>
      
      
      
     </div>
  </nav>


<script>

//mobile
$(document).ready(function(){
    
	   $(".button-collapse").sideNav();
    

 });


</script>

 

  <div class="section"></div>
  <main>
    <center>
      <h3>MY PALETTE</h3>
      <h5 style="color:#BBBBBB">Palettes You Saved</h5>
      <div class="container">
      <table class="bordered">
        <thead>
          <tr>
              <th data-field="id">Palette Name</th>
              <th data-field="name">Dominant Color</th>
              <th data-field="price">Full Palette</th>
          </tr>
        </thead>
         <tbody>
        
            
     
<?php 

	
	
	$con=mysqli_connect("localhost","shiny1912","tapmine1","shiny1912");
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$sql="SELECT * FROM palette where mem_id='$id'";
	
	if ($result=mysqli_query($con,$sql))
	{
		// Fetch one and one row
		while ($row=mysqli_fetch_row($result))
		{
			echo "<tr>";
			echo "<td>".$row[1]."</td>";
			
			
			
			
			echo "<td><svg class='p' width='100' height='70'><rect width='50' height='50' style='fill:rgb($row[2]);stroke-width:0;stroke:rgb(0,0,0)' /></svg></td>";
			
			$rowsave = $row[3];
			$rowarr = array();
			$rowarr = explode(",", $rowsave);
			
			echo "<td><svg class='p' width='50' height='60'><rect width='50' height='50' style='fill:rgb($rowarr[3],$rowarr[4],$rowarr[5]);stroke-width:0;stroke:rgb(0,0,0)' /></svg>";
			echo "<svg class='p' width='50' height='60'><rect width='50' height='50' style='fill:rgb($rowarr[6],$rowarr[7],$rowarr[8]);stroke-width:0;stroke:rgb(0,0,0)' /></svg>";
			echo "<svg class='p' width='50' height='60'><rect width='50' height='50' style='fill:rgb($rowarr[9],$rowarr[10],$rowarr[11]);stroke-width:0;stroke:rgb(0,0,0)' /></svg>";
			echo "<svg class='p' width='50' height='60'><rect width='50' height='50' style='fill:rgb($rowarr[12],$rowarr[13],$rowarr[14]);stroke-width:0;stroke:rgb(0,0,0)' /></svg>";
			echo "<svg class='p' width='50' height='60'><rect width='50' height='50' style='fill:rgb($rowarr[15],$rowarr[16],$rowarr[17]);stroke-width:0;stroke:rgb(0,0,0)' /></svg>";
			echo "<svg class='p' width='50' height='60'><rect width='50' height='50' style='fill:rgb($rowarr[18],$rowarr[19],$rowarr[20]);stroke-width:0;stroke:rgb(0,0,0)' /></svg></td>";
			
		
			
		
			echo "</tr>";
		}
		// Free result set
		mysqli_free_result($result);
	}
	
	mysqli_close($con);
	?>
  
     
        </tbody>
      </table> 
      </div>
    </center>
  </main>
  
  
  
  

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  
  
  
  
  
</body>

</html>