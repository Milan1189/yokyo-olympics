<?php
$servername="localhost";
$username="root";
$password="";
$dbname="final";
$conn=mysqli_connect($servername,$username,$password,$dbname);

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
