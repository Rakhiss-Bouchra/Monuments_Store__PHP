<?php
function check_login($conn)
{

	if(isset($_SESSION['id']))
	{

		$id = $_SESSION['id'];
		$query = "select * from admins where id = '$id' limit 1";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		} else {
			$query = "select * from users where id = '$id' limit 1";
			$result = mysqli_query($conn,$query);
			
			if($result && mysqli_num_rows($result) > 0)
			{

				$user_data = mysqli_fetch_assoc($result);
				return $user_data;
			}
		}
	} else {
		header("Location: login.php");
	}
}

function check_admin($conn, $user_data) {
	$id = $user_data['id'];

	$query = "select * from admins where id = '$id' limit 1";
	$result = mysqli_query($conn,$query);

	if( !($result && mysqli_num_rows($result) > 0) ) {
		header("Location: store.php");
	}
}