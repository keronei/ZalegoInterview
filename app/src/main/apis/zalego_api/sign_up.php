<?php
require_once('connection.php');
$fname = $_POST['fname'];

//$fname = "Keronei";


$sname = $_POST['sname'];
//$sname = "kiptanui";
$uname = $_POST['uname'];
//$uname = "keron1";
$password =  md5($_POST['password']);
//$password = md5("keronei");

//ascertain that the username does not exist

	$if_already_exists_query = "SELECT * FROM users
	WHERE uname='$uname'";

	$result = mysqli_query($conn, $if_already_exists_query);

	if (mysqli_num_rows($result) > 0)

		{

		$response = "User name already taken";



         die(json_encode($response));

		}else{
			//username is not taken, proceed to register user.
			
				$register_user_query = "INSERT INTO users (fname, sname, uname, password) VALUES ('$fname', '$sname', '$uname', '$password')";

		$result = mysqli_query($conn, $register_user_query);

	if($result){
		//when its success, do something...send success message
			$response =  "success";

		
		die(json_encode($response));
	}
	else
		{

$response ="Unable to regsiter";

			

			}



		die(json_encode($response));

		}
			

?>
