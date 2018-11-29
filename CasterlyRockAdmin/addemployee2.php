<?php

// Start the session
if (!isset($_SESSION))
{
  session_start();
}

$fname = $lname = $cnic = $address = $pnumber = $email = "";
$rdate = $bdate = $Salary = "";
  

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

  if (!empty($_POST["firstname"])) 
  {
    $fname = $_POST["firstname"];
  } 
 
 if (!empty($_POST["lastname"])) 
  {
    $lname = $_POST["lastname"];
  }

  if (!empty($_POST["cnic"])) 
  {
    $cnic = $_POST["cnic"];
  }

if (!empty($_POST["Address"])) 
  {
    $address = $_POST["Address"];
  }

  if (!empty($_POST["Email"])) 
  {
    $email = $_POST["Email"];
  }
  
 if (!empty($_POST["PhoneNumber"])) 
  {
    $pnumber = $_POST["PhoneNumber"];
  }


  if (!empty($_POST["Dbirth"])) 
  {
    $bdate = $_POST["Dbirth"];
    $date = DateTime::createFromFormat('m/d/Y',$bdate);
    $Bdate = $date->format("Y-m-d");
  
  }
  if (!empty($_POST["Salary"])) 
  {
    $Salary = $_POST["Salary"];
  }
}
$Rdate=date('y.m.d');
$ahmed='GASTRONOMY';
try
{
  include "Connection.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $sql = "INSERT INTO person (CNIC , FNAME , LNAME , Address , PhoneNumber , Email)
    VALUES ('$cnic' , '$fname ', '$lname', '$address' , '$pnumber' , '$email')";
  
    
    $conn->exec($sql);
    
    }
catch(PDOException $e)
    {
    echo "\n";
    echo $sql . "<br>" . $e->getMessage();
    echo "\n";
    header('location:GSindex.php?err=Duplicate Cnic Provided ');

    }

$conn = null;

try
{
	echo "\n";
    
  include "Connection.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO employee (CNIC , Department , Salary , DOB , H_Date)
    VALUES ('$cnic' , '$ahmed' , '$Salary' , '$Bdate', '$Rdate')";
  
  
  	$conn->exec($sql);
}
	catch(PDOException $e)
    {
    echo "\n";
    echo $sql . "<br>" . $e->getMessage();
    echo "\n";
    }

$conn = null;
  
session_unset(); 

session_destroy(); 

?>


<!DOCTYPE html>
<html>
<head>
	<title>CONFIRMATION</title>
</head>
<body>


     <h1 style='margin-left: 80px; color: black; font-size: 30px'>     EMPLOYEE ADDED</h1>

<li style="float: right; color: white; font-size: 30px; list-style-type: none;
    "> <a href="GSindex.php"> <strong>Click Here To Continue</strong> </a> </li>
            

</body>
</html>
