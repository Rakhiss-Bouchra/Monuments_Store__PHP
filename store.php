
<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion

?>

<!DOCTYPE html>
<html>
  <head>
  
    <link rel="stylesheet" href="stylestore.css">
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
           <a href="utilisateurs.php">
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

      <div class="head">
        <l1>Bienvenue<br></l1>
        <l3> Store </l3>
      </div>

       <main>
        <div class="box-add">
                <div id="add-image"><img src="images/plus.jpg" width="30px" ></div>
                
                <form action="" id="create-form">
                    <div class="titre-add">
                        <input class="titre-input-add" type="text" placeholder="Titre" name="titre" required>
                    </div>
                    <div class="location-add">
                        <input class="location-input-add" type="text" placeholder="Location" name="location" required>
                    </div>
                    
                    <div class="description-add">
                        <textarea class="description-input-add" name="description" rows="9" cols="33" required>Description</textarea>
                    </div>
                    
                    <div class="image-add">
                        <input class="image-input-add" type="file"  name="image" required>
                    </div>
                    
                    <div class="prix-add">
                        <input class="prix-input-add" type="text" placeholder="Prix" name="prix" required>
                    </div>
                    <div class="copies-add">
                        <input class="copies-input-add" type="text" placeholder="Nbr Copies" name="copies" required>
                    </div>
                    </form>
</div>
        <div class="box-moments" style="background-image: url(images/monument1.jpg); background-position: center; background-size: auto 300px;">
            <form action="">
                <div class="titre">
                    <input class="titre-input" type="text" placeholder="Tour Hassan 2" name="titre" readonly>
                </div>
                <div class="location">
                    <input class="location-input" type="text" placeholder="Rabat" name="location" readonly>
                </div>
                
                <div class="description">
                    <textarea class="description-input" name="description" rows="9" cols="33" readonly>La Tour Hassan est un minaret historique jamais termine, cet edifice devait etre non seulement la plus grande mosquee mais aussi le plus grand monument religieux du monde au XIIe siecle.</textarea>
                </div>

                <div class="prix">
                    <input class="prix-input" type="text" placeholder="13$" name="prix" readonly>
                </div>
                <div class="copies">
                    <input class="copies-input" type="text" placeholder="12 Copies" name="copies" readonly>
                </div>
                </form>
        </div>

        <div class="box-moments" style="background-image: url(images/monument2.jpg); background-position: center; background-size: auto 300px;">
            <form action="">
                <div class="titre">
                    <input class="titre-input" type="text" placeholder="La Colisée" name="titre" readonly>
                </div>
                <div class="location">
                    <input class="location-input" type="text" placeholder="Rome" name="location" readonly>
                </div>
                
                <div class="description">
                    <textarea class="description-input" name="description" rows="9" cols="33" readonly>Colisee est la plus grande construction de l antiquite romaine, il se trouve actuellement au centre-ville de Rome, ce qui en fait le monument le plus visite de Rome</textarea>
                </div>

                <div class="prix">
                    <input class="prix-input" type="text" placeholder="10$" name="prix" readonly>
                </div>
                <div class="copies">
                    <input class="copies-input" type="text" placeholder="13 Copies" name="copies" readonly>
                </div>
                </form>
        </div>

        <div class="box-moments" style="background-image: url(images/monument3.jpg); background-position: center; background-size: auto 300px;">
            <form action="">
                <div class="titre">
                    <input class="titre-input" type="text" placeholder="Taj Mahal" name="titre" readonly>
                </div>
                <div class="location">
                    <input class="location-input" type="text" placeholder="Inde" name="location" readonly>
                </div>
                
                <div class="description">
                    <textarea class="description-input" name="description" rows="9" cols="33" readonly>Le Taj Mahal est surtout connu pour son mausolee de marbre blanc, symbole de l amour eternel, mais ce mausolee ne represente qu une partie du site du Taj Mahal. Ce dernier est en fait un vaste ensemble rectangulaire, d exactement 580m par 305 oriente Nord-Sud.</textarea>
                </div>
                <div class="prix">
                    <input class="prix-input" type="text" placeholder="90$" name="prix" readonly>
                </div>
                <div class="copies">
                    <input class="copies-input" type="text" placeholder="10 Copies" name="copies" readonly>
                </div>
            </form>
        </div>

        <div class="box-moments" style="background-image: url(images/monument4.jpg); background-position: center; background-size: auto 300px;">
            <form action="">
             <div class="titre">
                 <input class="titre-input" type="text" placeholder="Tour de pise" name="titre" readonly>
             </div>
             <div class="location">
                 <input class="location-input" type="text" placeholder="Italie" name="location" readonly>
             </div>
             
             <div class="description">
                 <textarea class="description-input" name="description" rows="9" cols="33" readonly>La tour de Pise est le campanile de la cathedrale Notre-Dame de l Assomption de Pise, en Toscane. Elle est situee a proximite du chevet de la cathedrale et fait partie des monuments de la piazza dei Miracoli, inscrit au patrimoine mondial de l UNESCO. Sa construction debut en 1173.</textarea>
             </div>

             <div class="prix">
                 <input class="prix-input" type="text" placeholder="18$" name="prix" readonly>
             </div>
             <div class="copies">
                 <input class="copies-input" type="text" placeholder="18 Copies" name="copies" readonly>
             </div>
             </form>
        </div>

        <div class="box-moments" style="background-image: url(images/monument5.png); background-position: center; background-size: auto 300px;">
            <form action="">
             <div class="titre">
                 <input class="titre-input" type="text" placeholder="Tour Eiffel" name="titre" readonly>
             </div>
             <div class="location">
                 <input class="location-input" type="text" placeholder="France,Paris" name="location" readonly>
             </div>
             
             <div class="description">
                 <textarea class="description-input" name="description" rows="9" cols="33" readonly>La tour Eiffel est une structure en fer puddle, un fer qui a perdu une part de son carbone et donc rouille moins vite. Elle est de forme pyramidale aux cetes legerement incurves. Elle mesure 324m de haut et se divise en 4 parties separees par un etage.</textarea>
             </div>

             <div class="prix">
                 <input class="prix-input" type="text" placeholder="14$" name="prix" readonly>
             </div>
             <div class="copies">
                 <input class="copies-input" type="text" placeholder="19 Copies" name="copies" readonly>
             </div>
             </form>
     </div>

    </main> 
    <script src="scriptstore.js"></script>
    <script>
        
        var addButton = document.getElementById('add-image');

        addButton.addEventListener('click', () => {
            var form = document.getElementById('create-form');
            form.style.display = "block";
            addButton.style.display = "none";
        })
    </script>   
 
    

  </body>
</html>