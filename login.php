<?php
session_start();
include('config.php');

if (isset($_POST['email'])){
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  $query = "SELECT * FROM `admin` WHERE email='$email' and password='".hash('sha256', $password)."'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if ($rows!=0){
      $_SESSION['email'] = $email;
      header("Location: utilisateurs.php");
  }
  else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="stylelogin.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
<form class="box" action="" method="post" name="login">
<div>
    <span class="material-symbols-outlined">storage</span>
</div>
<h1 class="box-title">Monuments Catalog Login</h1>
<label><b>E-mail
</b>   
</label> 
<input type="text" class="box-input" name="email" placeholder="example.mail@gmail.com">
<label><b>Password
</b> 
</label>
<input type="password" class="box-input" name="password" placeholder="Only you know it.">
<br><br>
<input type="submit" value="Login " name="submit" class="box-button">

<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>