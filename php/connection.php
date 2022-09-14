<?php
//session_start();
  
  // Create connection
$host = "localhost";
$username = "root";
$password = "";
$dbname ="alaminfo_db";

//$username = "alaminfo_db"; 
//$password = "}Y[QHqV$}r1E"; 
//$password="iRPw-L$w6@WI56xzsd@986/yht+})&^";
//$host = "localhost"; 
//$dbname = "alaminfo_db"; 

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
//echo "Connected successfully";
}



?>