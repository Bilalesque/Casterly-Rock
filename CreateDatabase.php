<?php

$servername="localhost"; 
$username = "CasterlyRock";
$password = "Crock";
$db = "CasterlyRock";
 try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS CasterlyRock";
    $conn->exec($sql);
    // use exec() because no results are returned
    $conn->exec($sql);
    }
catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>

