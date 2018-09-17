<?php
require_once('connection.php');

$uname = mysqli_escape_string($con, $_POST['uname']);
//$uname = "keron1";
$password =  md5($_POST['password']);
//$password = md5("keronei");

//ascertain that the username does not exist

	$if_already_exists_query = "SELECT * FROM users
	WHERE uname='$uname' and password='$password'";

	$result = mysqli_query($conn, $if_already_exists_query);

	if (mysqli_num_rows($result) > 0)

		{
			

		
		$response = "ok";

         die(json_encode($response));

		}else{
			
			$response = "wrong credentials";
			die(json_encode($response));
		
	}

			

?>
