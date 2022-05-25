<?php
session_start();
include 'projects/esp/db.php';

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
