<?php
$host="localhost";
$username="root";
$password="";
$db="socialmediawebsite";

$con = new mysqli($host, $username, $password,$db);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
?>