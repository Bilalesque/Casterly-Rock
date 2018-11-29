<?php

if (!isset($_SESSION))
{
  session_start();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>View Customers</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/jquery-ui.css" type="text/css">

<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Adamina_400.font.js"></script>
<script type="text/javascript" src="js/jquery.jqtransform.js" ></script>
<script type="text/javascript" src="js/script.js" ></script>
<script type="text/javascript" src="js/kwicks-1.5.1.pack.js" ></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>

<script>
  $(document).ready(function() {
    $(".datepicker").datepicker();
  });
  </script>
    
</head>
<body id="page1">
<div class="bg1">
  <div class="bg2">
    <div class="main">
      <!-- header -->
      <header>
          <li><a href="adminadd.php"><img src="images/logo.png" height="120px" width="300px" alt=""></a> </li>
      </header>
      <div class="box">
          <nav>
          <ul id="menu">
            <li><a href="adminadd.php">+Manager</a></li>
            <li><a href="adminview.php">Employee</a></li>
            <li  class="active"><a href="cust.php">Customer</a></li>
            <li><a href="admindelete.php">-Employee</a></li>
            <li><a href="adminsal.php">SalRecords</a></li>
            <li><a href="addcname.php">+Cname</a></li>
            <li><a href="logout.php">LogOut</a></li>
            
            </ul>
        </nav>
        
        <!-- header end -->
        <!-- content -->
        <article id="content">
          <div class="box1">
            <div class="wrapper">
            
                     
<h2 style='text-align: center; color: black; font-size: 30px'>EVENT CUSTOMER DETAILS


 <?php

echo "<table style='border: solid 1px black; font-size:15px;'>";


class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

try {

include "Connection.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare("SELECT customer.CNIC , customer.Cust_ID ,FNAME ,LNAME , Address , PhoneNumber , Email , CreditCardNo , Event_ID , type , E_Date , Capacity , Price , Hall_ID FROM person , customer , event where person.CNIC = customer.CNIC and event.Cust_ID=customer.Cust_ID");

    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  
    if ($stmt->rowCount() == 0)
      {
        
        echo "<br><br>";
        echo "<h2>NO RECORDS</h2>";

       }
   else
   {
     
        echo "<tr><th>CNIC</th><th>CustID</th><th>Fname</th><th>Lname</th><th>Addr/th><th>PNumber</th><th>Email</th><th>CC-No</th><th>EventID</th><th>Type</th><th>EDate</th><th>Cap</th><th>Price</th><th>Hall-ID</th></tr>";

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) 
    {
        echo $v;
    }
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>"; 
?>

</h2>

    <br>
    <br>




<h2 style='text-align: center; color: black; font-size: 30px'>GASTRONOMY CUSTOMER DETAILS


 <?php

echo "<table style='border: solid 1px black; font-size:15px;'>";


try {

include "Connection.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare("SELECT customer.CNIC , customer.Cust_ID ,FNAME ,LNAME , Address , PhoneNumber , Email , CreditCardNo , Res_ID , Type ,  no_of_ppl ,E_Date , Name , Price FROM person , customer , dining where person.CNIC = customer.CNIC and dining.Cust_ID=customer.Cust_ID");

    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  
    if ($stmt->rowCount() == 0)
      {
        
        echo "<br><br>";
        echo "<h2>NO RECORDS</h2>";

       }
   else
   {
echo "<tr><th>CNIC</th><th>CustID</th><th>Fname</th><th>Lname</th><th>Addr</th><th>PNumber</th><th>Email</th><th>CC-No</th><th>R-ID</th><th>Type</th><th>NOP</th><th>EDate</th><th>Name</th><th>Price</th></tr>";

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) 
    {
        echo $v;
    }
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>"; 
?>

</h2>

    <br>
    <br>



<h2 style='text-align: center; color: black; font-size: 30px'>RESIDENTIAL CUSTOMER DETAILS


 <?php

echo "<table style='border: solid 1px black; font-size:15px;'>";


try {

include "Connection.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare("SELECT customer.CNIC , customer.Cust_ID ,FNAME ,LNAME , Address , PhoneNumber , Email , CreditCardNo , package.P_ID , Type, no_of_ppl ,S_Date ,E_Date , Price FROM person , customer , package , roomstatus , room where person.CNIC = customer.CNIC and package.Cust_ID=customer.Cust_ID and roomstatus.P_ID=package.P_ID and roomstatus.Room_ID=room.Room_ID");

    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  
    if ($stmt->rowCount() == 0)
      {
        
        echo "<br><br>";
        echo "<h2>NO RECORDS</h2>";

       }
   else
   {
        echo "<tr><th>CNIC</th><th>CustID</th><th>Fname</th><th>Lname</th><th>Addr</th><th>PNumber</th><th>Email</th><th>CC-No</th><th>P-ID</th><th>Type</th><th>NOP</th><th>SDate</th><th>EDate</th><th>Price</th></tr>";

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) 
    {
        echo $v;
    }
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>"; 
?>

</h2>

    <br>
    <br>
    
            </div>
            <div class="pad">
              <div class="line1">
              </div>
            </div>
        </div>  
          <div class="pad">
            <div class="wrapper line3">
              
            </div>
          </div>
        </article>
        <!--content end-->
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
    <!-- {%FOOTER_LINK} -->
  </footer>
  <!-- footer end -->
</div>
   
    
    
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(document).ready(function () {
    $('.kwicks').kwicks({
        max: 500,
        spacing: 0,
        event: 'mouseover'
    });
})
</script>
</body>
</html>