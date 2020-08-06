<?php 

$dbservername = 'localhost';
$dbUsername = "root";
$dbPass = "root";
$dbName = "adil_project";

$conn = new mysqli($dbservername, $dbUsername,$dbPass,$dbName);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
//   echo "Connected successfully";

?>