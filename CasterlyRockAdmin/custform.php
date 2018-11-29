<?php
// Start the session
if (!isset($_SESSION))
{
  session_start();
}

$compname = $cdiscount = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

  if (!empty($_POST["compname"])) 
  {
    $compname = $_POST["compname"];
  } 
 
 if (!empty($_POST["cdiscount"])) 
  {
    $cdiscount = $_POST["cdiscount"];
  }

}

try
{
  include "Connection.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	 $sql = "INSERT INTO company (name , discount)
    VALUES ( '$compname' , '$cdiscount' )";
  
    
    $conn->exec($sql);
    
    }
catch(PDOException $e)
    {
    
    echo $sql . "<br>" . $e->getMessage();
    
    }

$conn = null;

?>

<!DOCTYPE html>
<html>
<head>
	<title>CONFIRMATION</title>
</head>
<body>


     <h1 style='margin-left: 80px; color: black; font-size: 30px'>     COMPANY ADDED</h1>

<li style="float: right; color: white; font-size: 30px; list-style-type: none;
    "> <a href="addcname.php"> <strong>Click Here To Continue</strong> </a> </li>
            

</body>
</html>
