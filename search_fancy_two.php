<html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  
     <title>Chocolatte</title>
  <!--  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> -->
    <script src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <script src="js/color-thief.js"></script>
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
  
  <!-- colorbox -->
        <link rel="stylesheet" href="../css/skeleton.css">
        <link rel="stylesheet" href="css/colorbox.css">
     <script type="text/javascript" src="js/toucheffects.js"></script>     
     
        <!-- css -->
<link type="text/css" rel="stylesheet" href="css/lightgallery.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
      <link rel="stylesheet" href="main.css">
      <link rel="stylesheet" href="../css/normalize.css">
      <link rel="stylesheet" href="../css/skeleton.css">
        <link rel="stylesheet" href="css/colorbox.css">  
        
  
  
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
</head>
<body>

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


<!-- materialized nav -->
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="search_fancy.php">SEARCH BY KEYWORDS</a></li>
        <li><a href="searchbycolor.html">SEARCH BY COLOR</a></li>
        <li><a href="mypalette.php">MY PALETTE</a></li>
        <li><a href="#">ABOUT</a></li>
      </ul>
    </div>
  </nav>



<div>
 <main>
    <center>
<!--search bar -->

<div class="container">
<form class="col s12"  id="myForm" action="" method="post">

    <div class="input-field">

        <input type="text" id="item" name="imageSearch" placeholder="Search for an Image">
        <input type="submit" value="search"> <br> <br>
    </div>
    
</form>
</div>



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


	  





    function search() {
        var apiKey = '3qnrktstw5fdh8yayg43kj87';




        $.ajax(
                {
                    type:'GET',
                    url:"https://api.gettyimages.com/v3/search/images?phrase=" + $('#item').val() + "&fields=comp&page=3&page_size=20",
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
                        $("#chocolat-parent").append("<span class='grid cs-style-1'><li><figure class='f' ><img id='"+i+"' class='gallery' src='" +  data.images[i].display_sizes[0].uri + "' > </img></figure></li></span>");




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

colorarr[j] = color;

console.log(colorarr[j]);
console.log(colorP);
$('#' + j).after("<a href='image.php?myNumber="+color+"&palette="+colorP+"&imgsrc="+img.src+"' class='colors'><figcaption><svg class='p' width='100px' height='70'><rect x='50' y='20' rx='5' ry='5' width='50' height='50' style='fill:rgb("+colorP[1][0]+","+ colorP[1][1]+","+ colorP[1][2]+");stroke-width:1;stroke:rgb(0,0,0)' /></svg><svg class='p' width='100px' height='70'><rect x='50' y='20' rx='5' ry='5' width='50' height='50' style='fill:rgb("+color+");stroke-width:1;stroke:rgb(0,0,0)' /></svg><svg class='p' width='100px' height='70'><rect x='50' y='20' rx='5' ry='5' width='50' height='50' style='fill:rgb("+colorP[2][0]+","+ colorP[2][1]+","+ colorP[2][2]+");stroke-width:1;stroke:rgb(0,0,0)' /></svg></figcaption></a>");




//$(this).attr('title', colorarr[j]);

j++;


//console.log('rgb('+color+')');
};
};
xhr.open('GET', data.images[i].display_sizes[0].uri);



xhr.send();


})();


console.log('end of for');








                }//end of for

               
                    $(document).ready(function(){
                    	
                        setTimeout(function(){
                        	
                        	alert("ready to test palette"); 
                            $('.colors').colorbox({iframe:true, fastIframe:true, width:"80%", height:"80%", transition:"none", scrolling: true}) }, 3000);
                       
                    });

                        

                 })

                .fail(function(data){
                    alert(JSON.stringify(data,3))
                    
                });
        return false;
    }

//function impalette


	


//});







</script>
</body>
</html>
