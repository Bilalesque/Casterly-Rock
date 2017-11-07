<!DOCTYPE html>
<html lang="en">
<head>
<title>Room Booking</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
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
    <script>
  window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
}
</script>
</head>
<body id="page4">
<div class="bg1">
  <div class="bg2">
    <div class="main">
      <!-- header -->
      <header>
          <li><a href="index.html"><img src="images/logo.png" height="120px" width="300px" alt=""></a> </li>
      </header>
      <div class="box">
        <nav>
          <ul id="menu">
            <li><a href="index.html">Home</a></li>
            <li class="active" ><a href="Rb.php">Room Packages</a></li>
            <li><a href="Gastronomy.php">Gastronomy</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="facilities.php">Facilities</a></li>
            <li><a href="reg.php">Reservation</a></li>
            </ul>
        </nav>
          

  <div id="frm">
  <form action="Rbform.php" method="post" name="roombook">
    
    <h2 class="bilal" style="color:#b09012; margin-top: 10px;margin-bottom: 10px ">Book Your Room</h2>

Select Room Type:
  <select style="margin: 7px" ng-model="myVar" name="sel1" required>
    <option value=""> </option>
    <option value="normal">Normal </option>
    <option value="suit">Suite </option>
  </select>
       

<br>

  Select Number of Rooms:
    <select style="margin: 7px " ng-model="myVar" name="sel2" required>
    <option value="" style="border-background-color: blue"> </option>
    <option value="1">1 Room </option>
    <option value="2">2 Rooms </option>
    <option value="3">3 Rooms </option>
    <option value="4">4 Rooms </option>
  </select>
   
  <br> 
  
  Select Number of Beds:
  <select style="margin: 7px" ng-model="myVar" name="sel3" required>
    <option value=""> </option>
    <option value="1">1 Bed </option>
    <option value="2">2 Beds </option>
    <option value="3">3 Beds </option>
  </select>
   
  <br>
  <input type="submit" value="Book" class="subbutton" style="padding: 9px">
  <input type="reset" value="Cancel" class="subbutton" style="padding: 9px">

</form>
          </div>
          <button onclick="topFunction()" id="myBtn" title="Go to top" style="background-color: #000;color:#b09012;padding: 15px;border-radius: 10px;">To Booking</button>
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
      <nav>
          <ul id="footer_menu">
            <li><a href="index.html">Home</a></li>
            <li class="active"><a href="Rb.php">Room Packages</a></li>
            <li><a href="Gastronomy.php">Gastronomy</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="facilities.php">Facilities</a></li>
            <li><a href="reg.php">Reservation</a></li>
            </ul>
      </nav>
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




        
          
          
          
  