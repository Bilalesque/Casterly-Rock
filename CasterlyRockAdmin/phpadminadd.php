<?php
// Start the session
if (!isset($_SESSION))
{
  session_start();
}

$fname = $lname = $cnic = $address = $pnumber = $email = "";
$rdate = $bdate = $Salary = $uname = $pass = $dept = "";
  

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
    $Bdate = $_POST["Dbirth"];
    $date = DateTime::createFromFormat('m/d/Y',$Bdate);
    $bdate = $date->format('Y-m-d');
  }

  
  if (!empty($_POST["Salary"])) 
  {
    $Salary = $_POST["Salary"];
  }
  
  if (!empty($_POST["uname"])) 
  {
    $uname = $_POST["uname"];
  }

  if (!empty($_POST["pass"])) 
  {
    $pass = $_POST["pass"];
  }
  if (!empty($_POST["dept"])) 
  {
    $dept = $_POST["dept"];
  }
}
$ahmed='ROOM RESERVATIONS';

$rdate=date('y.m.d');

$asd=1;

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
    $asd=2;
    echo "\n";
    echo $sql . "<br>" . $e->getMessage();
    echo "\n";

    header('location:adminadd.php?err=Duplicat Cnic Provided ');

    }

$conn = null;

try
{
	echo "\n";
    
  include "Connection.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "INSERT INTO employee (CNIC , Department , Salary , DOB , H_Date)
    VALUES ('$cnic' , '$dept' , '$Salary' , '$bdate', '$rdate')";
  
  
  	$conn->exec($sql);
}
	catch(PDOException $e)
    {
    echo "\n";
    echo $sql . "<br>" . $e->getMessage();
    echo "\n";

    }

$conn = null;
  
if($asd === 1)
{
$result="";
try
{
  echo "\n";
    
  include "Connection.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $q = $conn->query("SELECT Emp_ID from employee where employee.CNIC = '$cnic' ");
   $f = $q->fetch();
   $result = $f['Emp_ID'];
}
catch(PDOException $e)
{

    echo "\n";
    echo "Error in selecting cnic";
    echo "\n";

}
   $conn = null;
try
{
  include "Connection.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO manager (Emp_ID , Department , Username , password) VALUES ( '$result' , '$dept' , '$uname' , '$pass')";
  
  
    $conn->exec($sql);
}
  catch(PDOException $e)
    {
    echo "\n";
    echo $sql . "<br>" . $e->getMessage();
    echo "\n";

    }

$conn = null;
 
 }
session_unset(); 

session_destroy(); 

?>

<!DOCTYPE html>
<html>
<head>
	<title>CONFIRMATION</title>
</head>
<body>


     <h1 style='margin-left: 80px; color: black; font-size: 30px'>     MANAGER ADDED</h1>

<li style="float: right; color: white; font-size: 30px; list-style-type: none;
    "> <a href="adminadd.php"> <strong>Click Here To Continue</strong> </a> </li>
            

</body>
</html>
