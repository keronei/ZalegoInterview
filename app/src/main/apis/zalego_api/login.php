<?php
require_once('connection.php');

$uname = $_POST['uname'];
//$uname = "keron1";
$password =  md5($_POST['password']);
//$password = md5("keronei");

//ascertain that the username does not exist

	$if_already_exists_query = "SELECT * FROM users
	WHERE uname='$uname' and password='$password'";

	$result = mysqli_query($conn, $if_already_exists_query);

	if (mysqli_num_rows($result) > 0)

		{
			$response=array(

				"status"=>"0",

				"data"=>"Ok"

				);

			die(json_encode($response));

      

		}else{
		$response=array(

				"status"=>"1",

				"data"=>"Credentials"

				);

			die(json_encode($response));

		
	}

			

?>
