<!DOCTYPE html>
<html lang="en">
<head>
<title>Casterly Rock</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
<script type="text/javascript" src="js/lib2.js">
</script>
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Adamina_400.font.js"></script>
<script type="text/javascript" src="js/formvalidate.js"></script>
<script type="text/javascript" src="js/jquery.jqtransform.js" ></script>
<script type="text/javascript" src="js/script.js" ></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
    <script type="text/javascript" src="js/angular.min.js">
    </script>
    <script type="text/javascript" src="js/validateform.js">
    </script>
    <script type="text/javascript" src="js/dropdownform.js">
    </script>
    <script type="text/javascript" src="js/lib1.js">
    </script>

</head>
<body id="page4">
<div class="bg1">
  <div class="bg2">
    <div class="main">
      <!-- header -->
      <header>
      </header>
        
<?php

$unameErr = $passErr = "";
$uname = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["username"])) 
  {
    $unameErr = "";
  } 
  else 
  {
    $uname = ($_POST["username"]);
  }
  if (empty($_POST["password"]))
  {
      $passErr = "";
  }
  else
  {
      $pass = ($_POST["password"]);
  }
    if(!empty($_POST["username"]) && !empty($_POST["password"]))
    {
         
    }   
    
}
?>
<img src="images/logo.png" style="max-height: 100%" height="300px" width="450px"  alt="Logo">
  <div id="frm" style="background-color: transparent;">
      
   <form action="adminlogin.php"  method="post" name="adminlogin">    
       
        <table style="margin-left: 650px;margin-right: 150px; margin-top:-230px;margin-bottom: 10px;table-layout: fixed;">
         <tr>
          <td>
              <input type="text" id="username" name="username" placeholder="Username"  required/>
              <span class="error" ng-show="adminlogin.username.$touched && adminlogin.username.$invalid"></span>
           </td>
         </tr>
         <tr>
          <td>
              <input type="text" id="password" name="password" placeholder="Password"  required/>
              <span class="error" ng-show="adminlogin.password.$touched && adminlogin.password.$invalid"></span>
          </td>
          </tr>
       </table>  
        <input type="submit" value="Login" class="subbutton" style="margin-left: 620px;">
        <input type="reset" value="Cancel" class="subbutton" style="margin: 30px;">
    
   </form>
</div>
</div>
</div>
</div>
</div>          
  <div class="main">
  <!-- footer -->
  <footer>
    <div class="col2">
        
        <h2>LOCATION 
        </h2>
        <p>
            SHAH LATIF TOWN, NEAR BHAINS COLONY KARACHI,PAKISTAN
        </p>
        <h2>CONTACT NUMBER
        </h2>    
        <p>
            021-987654321
        </p>
      
    </div>
    <div class="col1 pad_left1">
      <ul id="icons">
        <li><a href="https://pk.linkedin.com" class="normaltip"><img src="images/icon1.jpg" alt=""></a></li>
        <li><a href="https://www.facebook.com" class="normaltip"><img src="images/icon2.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon3.jpg" alt=""></a></li>
        <li><a href="https://twitter.com/login?lang=en" class="normaltip"><img src="images/icon4.jpg" alt=""></a></li>
      </ul>
    </div>
    <!-- {%FOOTER_LINK} -->
  </footer>
  <!-- footer end -->
</div>          
          
          
  
<script type="text/javascript">Cufon.now();</script>
</body>
</html>