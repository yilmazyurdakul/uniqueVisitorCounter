<?php
session_start();

$servername = "localhost";
$username = "...";
$password = "...";
$dbname = "...";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

$ip = $_SERVER['REMOTE_ADDR'];

if (($_SESSION["visiting"]) == $ip) {
  
//echo "Counted<br>";
//echo $ip;
  
} else {
  
  $_SESSION["visiting"] = $ip;
  
    $sql = "INSERT INTO counter (ip) VALUES ('".$ip."')";

 if ($conn->query($sql) === TRUE) {
//    echo "New visitor<br>";
//    echo $ip;
    
 } else {
  echo "Error updating record: " . $conn->error;
 }
}
?>
