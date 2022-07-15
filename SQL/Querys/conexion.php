<?php

$servername = "localhost";
$username = "root";
$password = "";
$bdname="evotek";

// Create connection
$conn = new mysqli($servername, $username, $password,$bdname);

$bd="evotek";

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>