<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

$var=$_POST["cnic"];
try {

        include "Connection.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $q = $conn->query("SELECT Emp_ID from employee where employee.CNIC = '$var' ");
    $f = $q->fetch();
    $result = $f['Emp_ID'];

    if($result == "")
        header('location:admindelete.php?err=WRONG CNIC');
    
    $conn = null;


		include "Connection.php";

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $q = $conn->query("DELETE FROM manager WHERE Emp_ID = '$result' ");
    
    }
catch(PDOException $e)
    {

    }

$conn = null;

try {

        include "Connection.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $q = $conn->query("DELETE FROM employee WHERE CNIC = '$var'  ");
    
    
    }
catch(PDOException $e)
    {
    echo "Errorr";
    }


$conn = null;


try {

        include "Connection.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


   $q = $conn->query("DELETE FROM person WHERE CNIC = '$var'  ");
   
    }
catch(PDOException $e)
    {
        echo "Error";
    }

echo "Record deleted successfully";
    

$conn = null;

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CONFIRMATION</title>
</head>
<body>


<li style="float: right; color: white; font-size: 30px; list-style-type: none;
    "> <a href="admindelete.php"> <strong>Click Here To Continue</strong> </a> </li>
            

</body>
</html>
