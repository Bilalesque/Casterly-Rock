<?php
// Start the session
if (!isset($_SESSION))
{
  session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $uname = ($_POST["username"]);
    $pass = ($_POST["password"]);
}
$v4 = $v1 = $v2 = $v3 = 0;
	
	if($uname == "admin" && $pass == "admin")
	{
			$v4=1;
  			header('location:adminadd.php');
	}
	include "Connection.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT Department from manager where Username = '$uname' and password = '$pass' and Department = 'EVENTS' ");
    $stmt->execute();
	if($stmt -> rowcount() == 1)
		{
			$v1=1;
  			header('location:EMindex.php');
		}
	$conn=null;	

	include "Connection.php";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT Department from manager where Username = '$uname' and password = '$pass' and Department = 'GASTRONOMY' ");
    $stmt->execute();
	if($stmt -> rowcount() == 1)
		{
			$v2=1;
  			header('location:GSindex.php');
		}
$conn=null;

	include "Connection.php";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT Department from manager where Username = '$uname' and password = '$pass' and Department = 'ROOM BOOKING' ");
    $stmt->execute();
	if($stmt -> rowcount() == 1)
		{
			$v3=1;
  			header('location:RBindex.php');
		}

$conn=null;

	if($v1 == 0 && $v2 == 0 && $v3 == 0 && $v4 == 0)
	{
		header('location:index.php?err=INCORRECT USERNAME OR PASSWORD');
	}
   
?>