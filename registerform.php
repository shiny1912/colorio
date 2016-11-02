

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
    
  </style>      
 
      
      
</head>
<body>
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
      
      <a href="#!" class="brand-logo center" id="brandlogo">Colorio</a>
       
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      
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



      <div class="container col s12">
       
        <center>
    <form class="col s6" method="post" action=register.php>
            <div class='row'>
              <div class='col s4'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s4'>
                <input class='validate' type='text' name='mem_id' id='id' />
                <label for='mem_id'>ID</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s4'>
                <input class='validate' type='text' name='mem_pwd' id='password' />
                <label for='mem_pwd'>Password</label>
              </div>
            
            </div>
            
            <div class='row'>
              <div class='input-field col s4'>
                <input class='validate' type='text' name='mem_name' id='password' />
                <label for='mem_pwd'>Name</label>
              </div>
            
            </div>

            <br />
           
              <div class='row'>
                <button type='submit' name='btn_login' class='col s2 btn btn-small waves-effect indigo'>Done</button>
              </div>
           
          </form>
          
          </center>
          
          
          </div>








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
