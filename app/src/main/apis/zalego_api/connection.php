<?php
$server="localhost";
$pass="unlock";
$database="bets";
$user="root";
$conn=mysqli_connect($server,$user,$pass,$database);
if($conn->connect_error){
	die("Connection failed" .$conn->connect_error);
}

?>
