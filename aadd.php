<?php
session_start();

include("config.php");

if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
}

function random_num($length)
{
	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(6,$length - 1);

	for ($i=0; $i < $len; $i++) { 

		$text .= rand(0,9);
	}

	return $text;
}

?>

<?php



if (isset($_POST['aadd'])) {

    $randUserID = random_num(10);
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $id_admin = $_REQUEST['id'];

    $filename = $_FILES["image"]["name"];

    $tempname = $_FILES["image"]["tmp_name"];

        $folder = "uploads/".$randUserID.'/'.$filename;


        $sql = "INSERT INTO users (id, username, user_email, password, image, nbrcontributions, idadmin) VALUES ('$randUserID', '$name', '$email', '$password', '$filename', '0', '$id_admin')";


        if(!mysqli_query($conn, $sql)) {
            echo "ERROR: Sorry $sql. "
                . mysqli_error($conn);
        };       


        if(!file_exists('uploads/'.$randUserID)){        
            @mkdir('uploads/'.$randUserID.'/', 0666, true);  
        }

        if (move_uploaded_file($tempname, $folder)) {
            header("Location: utilisateurs.php");

        }else{

            echo "Failed to upload image";

    }

}
?>