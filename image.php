

<head>
  <!-- get the required files from 3rd party sources -->
  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/skeleton.css"> 

  <!-- use the font -->
  <style>
   
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
      background-color: #F0E9EC;
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
  
    .palletter{
    
    font-size: 97%;
    font-family: Courier;
    text-align: center;
    }
   
    container{
    
     border: 1px;
    
    }
    
    
  
	
    
  </style>
  
  <!-- materialize by online  
  
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
-->
  
  
  
</head>
<body bgcolor="#F0E9EC">



<?php
//session
$id = isset($_SESSION['id']) ? $_SESSION['id'] : null;
//$id = isset($_COOKIE['id']) ? $_COOKIE['id'] : null; 

$num = $_GET['myNumber'];
$palette = $_GET['palette'];

$imgsrc = $_GET['imgsrc'];

$numarr = explode(",", $num);

$palarr = explode(",", $palette);

 ?>
 <div class="container">
 <h7 style="color:#888888;float:right;">Click outside the white box to close the window.</h7>
<center>
<p style="background-color:#bbbbbb"><h4>Palette</h4></p>
</center>
<hr />  

 <p><strong><h6><strong>IMAGE</strong></h6></strong></p> 
 <center>
 <img src='<?=$imgsrc ?>'></img>
 </center>
 </div>
 <hr />  
 
 <div class="container">
 
 
 <hr />  
<p id="showhim"><h6 class="showhim"><strong>DOMINANT COLOR</strong></h6></p><p id="showme"><h7 style="color:#888888">Most used color in this photo</h7></p>
<svg class='p' width='70' height='70'><rect width='70' height='70' style='fill:rgb(<?=$num?>);stroke-width:0;stroke:rgb(0,0,0)' /></svg>
<br><text class='palletter'>#<?=dechex($numarr[0])?><?=dechex($numarr[1])?><?=dechex($numarr[2])?></text> 
<hr />
<p><strong><h6>PALETTE</strong></h6><h7 style="color:#888888">7 most used colors in the photo.</h7> </p>

      
     

<svg class='p' width='65' height='65'><rect width='65' height='65' style='fill:rgb(<?=$palarr[0]?>,<?=$palarr[1]?>,<?=$palarr[2]?>);stroke-width:0;stroke:rgb(0,0,0)' /></svg>
<svg class='p' width='65' height='65'><rect width='65' height='65' style='fill:rgb(<?=$palarr[3]?>,<?=$palarr[4]?>,<?=$palarr[5]?>);stroke-width:0;stroke:rgb(0,0,0)' /></svg>
<svg class='p' width='65' height='65'><rect width='65' height='65' style='fill:rgb(<?=$palarr[6]?>,<?=$palarr[7]?>,<?=$palarr[8]?>);stroke-width:0;stroke:rgb(0,0,0)' /></svg>
<svg class='p' width='65' height='65'><rect width='65' height='65' style='fill:rgb(<?=$palarr[9]?>,<?=$palarr[10]?>,<?=$palarr[11]?>);stroke-width:0;stroke:rgb(0,0,0)' /></svg>
<svg class='p' width='65' height='65'><rect width='65' height='65' style='fill:rgb(<?=$palarr[12]?>,<?=$palarr[13]?>,<?=$palarr[14]?>);stroke-width:0;stroke:rgb(0,0,0)' /></svg>
<svg class='p' width='65' height='65'><rect width='65' height='65' style='fill:rgb(<?=$palarr[15]?>,<?=$palarr[16]?>,<?=$palarr[17]?>);stroke-width:0;stroke:rgb(0,0,0)' /></svg>
<svg class='p' width='65' height='65'><rect width='65' height='65' style='fill:rgb(<?=$palarr[18]?>,<?=$palarr[19]?>,<?=$palarr[20]?>);stroke-width:0;stroke:rgb(0,0,0)' /></svg>


<?php  
$s_0 = sprintf("%02X", $palarr[0]);
$s_1 = sprintf("%02X", $palarr[1]);
$s_2 = sprintf("%02X", $palarr[2]);
$s_3 = sprintf("%02X", $palarr[3]);
$s_4 = sprintf("%02X", $palarr[4]);
$s_5 = sprintf("%02X", $palarr[5]);
$s_6 = sprintf("%02X", $palarr[6]);
$s_7 = sprintf("%02X", $palarr[7]);
$s_8 = sprintf("%02X", $palarr[8]);
$s_9 = sprintf("%02X", $palarr[9]);
$s_10 = sprintf("%02X", $palarr[10]);
$s_11 = sprintf("%02X", $palarr[11]);
$s_12 = sprintf("%02X", $palarr[12]);
$s_13 = sprintf("%02X", $palarr[13]);
$s_14 = sprintf("%02X", $palarr[14]);
$s_15 = sprintf("%02X", $palarr[15]);
$s_16 = sprintf("%02X", $palarr[16]);
$s_17 = sprintf("%02X", $palarr[17]);
$s_18 = sprintf("%02X", $palarr[18]);
$s_19 = sprintf("%02X", $palarr[19]);
$s_20 = sprintf("%02X", $palarr[20]);

   
   $s_18 = sprintf("%02X", $palarr[18]);
   $s_19 = sprintf("%02X", $palarr[19]);
   $s_20 = sprintf("%02X", $palarr[20]);
   

?>
<!-- colorpalette  -->
<br>

<text class='palletter'>#<?=$s_0?><?=$s_1?><?=$s_2?>  </text>

<text class='palletter'>#<?=$s_3?><?=$s_4?><?=$s_5?>  </text> 

<text class='palletter'>#<?=$s_6?><?=$s_7?><?=$s_8?>  </text>

<text class='palletter'>#<?=$s_9?><?=$s_10?><?=$s_11?>  </text> 

<text class='palletter'>#<?=$s_12?><?=$s_13?><?=$s_14?>  </text>

<text class='palletter'>#<?=$s_15?><?=$s_16?><?=$s_17?>  </text>

<text class='palletter'>#<?=$s_18?><?=$s_19?><?=$s_20?>  </text>



 
</div>
<hr />

  <div class="container"> 
  <form class="col s12" method="post" action=save_palette.php>
            
            
            <div class='row'>
              <div class='input-field col s12'>
                <p><strong><h6 class="showhim">NAME THIS PALETTE</strong></h6>   <h7 style="color:#888888">Choose name that effectively shows the palette!  </h7> </p>
              
         
                <input class='validate' type='text' name='palette' id='id' placeholder='Enter name of this Palette'/>
             
                <input type='hidden' name="dominant" value='<?=$num ?>'>
                <input type='hidden' name="whole" value='<?=$palette?>'>
                 <input type='hidden' name="imgsrc" value='<?=$imgsrc?>'>
                
              </div>
            </div>


          
           
<hr />            
<center>
<div style='float:bottom'>
<button type='submit' class='waves-effect waves-light btn'>Save Palette</button>

</div>
</form>

</div>
<script>

$(document).on("click", "#showhim", function(){
	
	        $("#showme").toggle();
	   
});
  



</script>
</body>
