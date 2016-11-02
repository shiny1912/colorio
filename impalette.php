

<head>
  <!-- get the required files from 3rd party sources -->
  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<!--    <link rel="stylesheet" href="../css/skeleton.css">  -->

  <!-- use the font -->
  <style>
   
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
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
  
    
  </style>
  
  <!-- materialize by online -->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

  
  
  
  
  
</head>
<body>
<script>

$('#impalette').onClick(function(){
	impalette();
});

</script>


<?php
//session
$id = isset($_SESSION['id']) ? $_SESSION['id'] : null;

$num = $_GET['myNumber'];
$palette = $_GET['palette'];

$imgsrc = $_GET['imgsrc'];
echo "<div><h4>Palette</h4></div>";

$palarr = explode(",", $palette);

 ?>
 <div class="container">
 <span width='40%' height='300px' >
 <p><strong><h5>IMAGE</h5></strong><img src='<?=$imgsrc ?>'></img></p><br> </span>
 
 </div>
 
 
 <div class="container">
 <span width='20%' height='300px' >
<p><strong><h6>Dominant Color</strong></h6></p>
<svg class='p' width='50' height='70'><rect width='50' height='50' style='fill:rgb(<?=$num?>);stroke-width:1;stroke:rgb(0,0,0)' /></svg>
<p><strong><h6>Palette</strong></h6></p>
<table>
<tr><svg class='p' width='50' height='70'><rect width='50' height='50' style='fill:rgb(<?=$palarr[0]?>,<?=$palarr[1]?>,<?=$palarr[2]?>);stroke-width:0;stroke:rgb(0,0,0)' /></svg></tr>
<tr><svg class='p' width='50' height='70'><rect width='50' height='50' style='fill:rgb(<?=$palarr[3]?>,<?=$palarr[4]?>,<?=$palarr[5]?>);stroke-width:0;stroke:rgb(0,0,0)' /></svg></tr>
<svg class='p' width='50' height='70'><rect width='50' height='50' style='fill:rgb(<?=$palarr[6]?>,<?=$palarr[7]?>,<?=$palarr[8]?>);stroke-width:0;stroke:rgb(0,0,0)' /></svg>
<svg class='p' width='50' height='70'><rect width='50' height='50' style='fill:rgb(<?=$palarr[9]?>,<?=$palarr[10]?>,<?=$palarr[11]?>);stroke-width:0;stroke:rgb(0,0,0)' /></svg>
<svg class='p' width='50' height='70'><rect width='50' height='50' style='fill:rgb(<?=$palarr[12]?>,<?=$palarr[13]?>,<?=$palarr[14]?>);stroke-width:0;stroke:rgb(0,0,0)' /></svg>
<svg class='p' width='50' height='70'><rect width='50' height='50' style='fill:rgb(<?=$palarr[15]?>,<?=$palarr[16]?>,<?=$palarr[17]?>);stroke-width:0;stroke:rgb(0,0,0)' /></svg>
<svg class='p' width='50' height='70'><rect width='50' height='50' style='fill:rgb(<?=$palarr[18]?>,<?=$palarr[19]?>,<?=$palarr[20]?>);stroke-width:0;stroke:rgb(0,0,0)' /></svg>
<h8><?=$palarr[18]?>,<?=$palarr[19]?>,<?=$palarr[20]?></h8>
</table>

</span>
</div>


<center>
  <div class="container"> 
  <form class="col s12" method="post" action=save_palette.php>
            
            
            <div class='row'>
              <div class='input-field col s12'>
              
                <input class='validate' type='text' name='palette' id='id' placeholder='Enter name of this Palette'/>
             
                <input type='hidden' name="dominant" value='<?=$num ?>'>
                <input type='hidden' name="whole" value='<?=$palette?>'>
                 <input type='hidden' name="imgsrc" value='<?=$imgsrc?>'>
                
              </div>
            </div>
            

<script>
function impalette(){
var apiKey = '1c5dc1ec-49ac-43dc-bb7f-0585fa4dc6e4';

$.ajax({ 
	   type: "GET",
	   
	   url: "https://impalette.com/api/scan?apiKey="+apiKey+"&link=<?=$imgsrc?>&palette=PantoneC",
	   success: function(data){
		           
	     alert(data);
	   }
	});



     return false;
}  



        

</script>
          
           
          

<div style='float:bottom'>
<button type='submit' class='waves-effect waves-light btn'>Save Palette</button>

</div>
</form>

</div>


</body>
