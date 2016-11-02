

<!DOCTYPE html>
<html>






<head>


    <title>Colorio</title>
  <!--  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> -->
    <script src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <script src="js/color-thief.js"></script>
      <script src="../js/color-thief.js"></script>
    <script src="js/jquery.chocolat.js"></script>
    <script src="js/lightgallery.min.js"></script>
    <script src="js/lg-thumbnail.min.js"></script>
    <script src="js/lg-fullscreen.min.js"></script>
    <script src="js/Vibrant.js"></script>
    <script src="js/jquery.fakecrop.js"></script>
    <script src="js/main.js"></script>
    <script src="js/progress.js"></script>
    <link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>

 <!-- materialize by online -->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">


<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- css -->
<link type="text/css" rel="stylesheet" href="css/lightgallery.css" />

   
      <link rel="stylesheet" href="../css/normalize.css">
      <link rel="stylesheet" href="../css/skeleton.css">
        <link rel="stylesheet" href="css/colorbox.css">
             
        

        
        
        

      <script type="text/javascript" src="js/adaptive-backgrounds.js"></script>
      <script type="text/javascript" src="js/imagesloaded.pkgd.js"></script>
      <script type="text/javascript" src="js/jquery.colorbox.js"></script>
      <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
      <script type="text/javascript" src="js/toucheffects.js"></script>

      <!-- FONT      –––––––––––––––––––––––––––––––––––––––––––––––––– -->
      <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
      <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Rubik:500" rel="stylesheet">
      
      <!-- materialize 
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
   <link rel="stylesheet" href="css/reset.css"> 
   <link rel="stylesheet" href="css/style.css">   -->
   
   
   <link rel="stylesheet" href="css/fakeLoader.css">
  
  <!-- navbar 
   <link rel="stylesheet" href="css/custom.css">  -->
   
  
 
      
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
    
    
    
    #search{
	background: url(loading_background.png) no-repeat;
	padding-left:25px;
}
    
    
  </style>      
 
      
      
</head>
<body>

<?php 
$id = isset($_SESSION['id']) ? $_SESSION['id'] : null;
$id = isset($_COOKIE['id']) ? $_COOKIE['id'] : null;
?>

<div style="float:right;background-color:#ffffff">
<h6 style="float:right;" > <?=$id?>, Welcome to Colorio!       </h6></div>
<div><a href="logout.php" style="float:right">Logout      </a> 
</div>



<div id="fakeLoader"></div>

<!--nav bar 
<nav class="navbar navbar-default" >
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
    <a class="navbar-brand" href="#">WebSiteName</a>
      <li><a href="#">HOME</a></li>
      <li><a href="search_fancy.php">SEARCH BY KEYWORDS</a></li>
      <li><a href="searchbycolor.html">SEARCH BY COLOR</a></li>
      <li><a href="mypalette.php">MY PALETTE</a></li>
      <li><a href="#">ABOUT</a></li>
    </ul>
  </div>
</nav>  -->

<div class="fakeloader"></div>
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
        

        


<!--  skeleton nav tryout
<nav class="navbar container"> 
<h4 class="logo"></h4> 
<ul class="navbar-list"> 
<li class="navbar-list-item"> <a class="navbar-list-link">About</a> </li> 
<li class="navbar-list-item"> <a class="navbar-list-link">Jobs</a> </li> 
<li class="navbar-list-item"> <a class="navbar-list-link">Contact</a> </li> 
</ul> </nav> 
-->



<div>
 <main>
    <center>
<!--search bar -->
<div class="container col-s1" style="background-color:#eeeeee;color:#aaaaaa;margin:20px">
 <h6>Type in Keyword to get photos. </h6>
</div>
<div class="col s6 container">
<form class="col s6"  id="myForm" action="" method="post">

    <div class=" col s6 input-field">

        <input type="text" id="item" name="imageSearch" placeholder="Type in Keywords ex) candy" >
      <!--  <input class = 'btn tooltipped' id="search" type="submit" value="search" data-position="bottom" data-delay="30" data-tooltip="If you're searching more than 2 times, please refresh!"></input> -->
       <button type='submit' id= "search" name='btn_login' class='col s12 btn btn-small tooltipped' style='background-color:#ffffff;color:#333333' href="search_Fancy.php" data-position="bottom" data-delay="30" data-tooltip="Please refresh to search other keywords!"><i class="tiny material-icons left">search</i>SEARCH </button>
        <button type='submit' id= "refresh" name='btn_login' class='col s12 btn btn-small' style='background-color:#ffffff;color:#333333' href="search_Fancy.php"><i class="tiny material-icons left">replay</i>REFRESH </button>
        <!-- <input type="submit" id="refresh" value="refresh" href="serach_fancy.php"> -->
    </div>
    
</form>
</div>

<hr />
<div id="chocolat-parent"></div>
<div id="palette"></div>
</div>



<script>

   var length = 3;
   var colorarr = new Array(length);



   var svgElement = $('<svg width="50px" height="50px"><rect fill="#ff00ff" width="50px" height="50px"></rect></svg>');
//search by keyword
    $('#myForm').on('submit', function(e){
        e.preventDefault();
        
        
        search();

 	
       
       // return false;
    });

    $(document).on("click", "#refresh", function(){
        location.reload(true);
    });
	  


    $(document).ready(function(){
               
    	   $(".button-collapse").sideNav();
           

        });



    function search() {
        var apiKey = '3qnrktstw5fdh8yayg43kj87';




        $.ajax(
                {
                    type:'GET',
                    url:"https://api.gettyimages.com/v3/search/images?phrase=" + $('#item').val() + "&fields=comp&page=3&page_size=30",
                    beforeSend: function (request)
                    {
                        request.setRequestHeader("Api-Key", apiKey);
                    }})
                .done(function(data){
                    console.log("Success with data");

                    for(var i = 0;i<data.images.length;i++)

                    {

                      length = data.images.length;

                      //var img = document.createElement('img');

                      //img.crossOrigin = 'Anonymous';

                      // do stuff


                      //img.src = data.images[i].display_sizes[0].uri;



                      console.log(i);






                        // load image from data url
                        $("#chocolat-parent").append("<span class='grid cs-style-1' id='grid'></span>");

                        


                      //var result = image.isLoaded ? 'loaded' : 'broken';


                             


//var colorarr = new Array(data.images.length);




var j=0;


(function(){

      var xhr = new XMLHttpRequest();
xhr.responseType = "blob";
xhr.onload = function () {
window.URL = window.URL || window.webkitURL; // support for Safari/old Chrome
var img = document.createElement('img');
img.src = window.URL.createObjectURL(xhr.response);
img.onload = function() {
var colorThief = new ColorThief();
var color = colorThief.getColor(img);
//var colorT = colorThief.getPalette(img,3); 
var colorP = colorThief.getPalette(img,8);
//j to i
colorarr[j] = color;

//console.log(colorarr[j]);
//console.log(colorP);
//<img id='"+ i +"'  class='gallery' src='" +  data.images[i].display_sizes[0].uri + "' >

$('#grid').append("<li><figure class='f' id='"+ i +"'><img id='1"+ j +"'  class='gallery' src='" +  img.src + "' > </img><figcaption style='background-color:#ffffff'><h9>3 dominant colors</h9><br><svg class='p' width='90' height='90'><rect x='10' y='10' width='70' height='70' style='fill:rgb("+colorP[1][0]+","+ colorP[1][1]+","+ colorP[1][2]+");stroke-width:0;stroke:rgb(0,0,0)' /></svg><svg class='p' width='90' height='90'><rect x='10' y='10' width='70' height='70' style='fill:rgb("+color+");stroke-width:0;stroke:rgb(0,0,0)' /></svg><svg class='p' width='90' height='90'><rect x='10' y='10' width='70' height='70' style='fill:rgb("+colorP[2][0]+","+ colorP[2][1]+","+ colorP[2][2]+");stroke-width:0;stroke:rgb(0,0,0)' /></svg><a href='image.php?id="+j+"&myNumber="+color+"&palette="+colorP+"&imgsrc="+img.src+"' class='colors'><h8>+ MORE</h8></a></figcaption></figure></li>");




//$(this).attr('title', colorarr[j]);

j++;


//console.log('rgb('+color+')');
};
};
xhr.open('GET', data.images[i].display_sizes[0].uri);



xhr.send();


})();


console.log('end of for');


console.log(colorarr[0]);




                }//end of for

               
                    $(document).ready(function(){
                        
                         
                    	$(".fakeloader").fakeLoader({
                            timeToHide:3100,
                            bgColor:"#ffffff",
                            spinner:"spinner5"
                        }); 

     
                     	
						setTimeout(function(){
							 
	                        
                        	//alert("ready to test palette"); 
                            $('.colors').colorbox({iframe:true, fastIframe:true, width:"80%", height:"80%", transition:"none", scrolling: true}) }, 3000);
                       
                    });
                   
                        	
                         //  alert("ready to test palette"); 
                           
                            
                       
                    

                        

                 })

                .fail(function(data){
                    alert(JSON.stringify(data,3));
                    
                });
        return false;
    }

//function impalette


	


//});







</script>

<!-- exclude this script to make colorbox work
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  -->
        <script src="js/fakeLoader.min.js"></script>
       
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  
  <!-- exclude this script to make colorbox work
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>   -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  
</body>
</html>
