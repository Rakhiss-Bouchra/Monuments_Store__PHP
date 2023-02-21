
<?php
  // Initialiser la session
  session_start();
  include("config.php");
?>

<!DOCTYPE html>
<html>
  <head>
  
    <link rel="stylesheet" href="stylestore.css">
    <link rel="stylesheet" href="styleutilisateurs.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  </head>
<body>
  <div class="sidebar">
    <div class="logo_content">
      <div class="logo">
        <h3 class="logo-name"> Acceuil </h3>
      </div>
      <div class="btn-toggle">
      <i class='bx bxs-grid'></i>
      </div>
    </div>
       <ul class="nav">
         <li>
           <a href="store.php">
         <i class='bx bx-store'></i>
         <span>Store</span></a>
         </li>
         <li>
           <a href="#">
             <i class='bx bxs-group'></i>
             <span>Utilisateurs</span></a>
         </li>
         <li>
           <a href="#">
             <i class='bx bx-info-circle'></i>
             <span>Logs</span></a>
         </li>
         <li>
           <a href="logout.php">
            <i class='bx bx-log-out-circle'></i>
            <span>Deconnexion</span></a>
         </li>
       </ul>
    </div>
    

    <main>

        <div id="box">
            <form action="aadd.php" method="POST" enctype="multipart/form-data">
                <div id="picture"><img id="plus-icon" src="images/plus.jpg" alt="" width="30px" style="margin-top: 2.1em;"></div>
                <input type="file" id="profilePicture" name="image" required/>

                <div>
                    <input id="user" class="input-field" type="text" placeholder="Name" name="name" required>
                </div>  

                <div>
                    <input id="mail" class="input-field" type="email" placeholder="E-mail" name="email" required>
                </div>

                <div>
                    <input id="pass" class="input-field" type="password" placeholder="Password" name="password" required>
                </div>
                <button type="submit" name="add">Ajouter</button>
            </form>
        </div>
        <?php
        
        $records = mysqli_query($conn,"select id, idadmin, username, user_email, password, image, nbrcontributions from users where idadmin = '".$user_data['id']."';");

        while($data = mysqli_fetch_array($records))
        {
        ?>
        <div class="box-user">
            <div class="image"><img src=<?php echo "uploads/".encrypt($data['id']).'/'.$data['picture']; ?> alt="" width="50px"></div>
            <div class="infos">
                <span class="name"><?php echo $data['username']; ?></span>
                <span class="email"><?php echo $data['email']; ?></span>
                <span class="nb-contr"><?php echo $data['nbrcontributions']; ?> contributions</span>
            </div>
        </div>

        <?php
        }
        ?>
        <div class="box-utilisateur">
            
        </div>
        
    </main>
      
    <script src="scriptstore.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
    <script>
        $('#picture').on('click', function(e) {
            console.log('clicked')
            $('#profilePicture').click();
        });
        window.addEventListener("dragover", function(e) {
            e = e || event;
            e.preventDefault();
        }, false);
        window.addEventListener("drop", function(e) {
            e = e || event;
            e.preventDefault();
        }, false);
        $('#profilePicture').change(function(e) {

            var input = e.target;
            if (input.files && input.files[0]) {
            var file = input.files[0];

            var reader = new FileReader();

            reader.readAsDataURL(file);
            reader.onload = function(e) {
                console.log(reader.result);
                $('#picture').css('background-image', 'url(' + reader.result + ')');
                $('#plus-icon').css('display', 'none');
            }
            }
        })
    </script>

    
    
    
</body>
</html>