

<html>

<head> 
   <!-- materialize online      -->
 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
 <!--   -->
  <link rel = "stylesheet" type="text/css" href="css/skeleton.css">
  
  <!-- 
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>  -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  
  
    <!-- FONT       -->
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
    
    .form1{
    
    color: #333333;
    
    }
   
   
  </style>
</head>

<body>


<!-- materialized nav -->
<nav class="white  z-depth-1">
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





  <div class="section"></div>
  <main>
    <center>
      

      <h5 class="grey-text">Please login into your account</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 white lighten-7 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post" action=loginsession.php>
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <h6 class='form1'><strong>Enter your ID<strong></strong></h6>
                <input class="u-full-width" type="email" placeholder="ID" id="id">
                
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <h6 class='form1'><strong>Enter your Password<strong></strong></h6>
                <input class="u-full-width" type="email" placeholder="password" id="password">
                
              </div>
                    
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-small waves-effect' style='background-color:#555555;color:#dddddd'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a href=registerform.php>Create account</a>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>