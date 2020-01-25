<?php
session_start();
               //si on clique sur la connexion
$connexion=mysqli_connect("localhost","root","","reservationsalles");

 if (!empty($_POST['formdeconexion'])) 
    {   	
    unset ( $_SESSION ['id'] );
    unset ($_SESSION['login']);	
$erreur="<p> class='codeerreur'>vous n'etes pas connecté !</p>";
    }
?>
<!
<html>
<head>
	   <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="nav.css">
     <link rel="stylesheet" type="text/css" href="css/reservation.css">

     <title>futsal club</title>
</head>
       <body class="oc-body-accueil-btp">
  

					 <!--HEADER ADMIN -->
     <section class="section-deventure">      
  
       <nav class ="oc-nav-btp">
          <ul id="oc-nav-btp">
              <li ><a class="ah"  href="index.php">Accueil</a></li><!--
          --><?php if (!isset($_SESSION['login'])) 
                      { 
                      	
                        echo "<li ><a class=\"ah\"  href=\"inscription.php\">inscription</a></li>";
                        echo "<li><a class=\"ah\"  href=\"connexion.php\">connexion</a></li>";
                    }
                        if (isset($_SESSION['login']))
                         {
                         echo "<li><a class=\"ah\"  href=\"profil.php\">profil</a></li>";
                         echo "<li><a class=\"ah\"  href=\"reservationsalles.php\">réservation</a></li>";
                         }
                         ?><!--
              --><li><a class="ah"  href="planning.php">voir le planning</a>

                         <li><a class="ah"  href="mailinto:olivier.crozet@gmail.com">contact</a></li>
            <?php
                    if  (isset($_SESSION['id'])) 
                    	{ 
                    		echo '<li>'.'<form  method="POST" action="">'.'<input  class="deco" type="submit" name="deconection" value="se deconnecté">'.'</li>';
                        }
                      ?>                     
          </ul>

       </nav>
       <main>
        <header class="oc-header-btp">
          <h1>reserver votre salle en remplissant se formulaire !<h1>
        </header>


        <!--DEBUT TABLE-->
<form class="form" method="GET" action="" >
        <table class="tablinscri">
          <tr>
            <td>
              <label  for="titreform"> titre :</label>
        </td>
        <td>
              <input type="text" name="titreform" placeholder="ecrire le titre" value="titre">
            </td>
          </tr>
           <tr>
            <td>
              <label  for="titreform"> description :</label>
        </td>
        <td>
              <input type="text" name="description" placeholder="Description" value="description">
            </td>
          </tr>
           <tr>
            <td>
              <label  for="titreform">debut :</label>
        </td>
        <td>
              <input type="date" name="debut" placeholder="debut" value="debut">
            </td>
          </tr>
           <tr>
            <td>
              <label  for="titreform">heure du debut :</label>
        </td>
        <td>
              <input type="time" name="debuth" placeholder="" value="debut">
            </td>
          </tr>
           <tr>
            <td>
              <label  for="titreform">fin :</label>
        </td>
        <td>
              <input type="date" name="fin" placeholder="" value="fin">
            </td>
          </tr>
           <tr>
            <td>
              <label  for="titreform">heure de fin :</label>
        </td>
        <td>
              <input type="time" name="finh" placeholder="" value="finh">
            </td>
          </tr>
        </form>
        <form class="form" method="POST" action="" >
          <tr>
               <td>
                <label  for="password2">confirmer votre mot de passe :</label>
              </td>
              <td>
                <input type="password" name="password2" placeholder="ecrire votre mot de passe">
              </td>
          </tr>
          
        </table>
      </form>
        <br/>
                <input  class="buton-inscription" type="submit" name="submit" value="s'inscrire"/>


 <footer>
  <section class="oc-footer-navigation">
  <div class="oc-container">
   <h3 class="oc-menu">Menu</h3>
    <div class="oc-columns">
     <ul class="oc-nav2">
      <li ><a class="oc-lien" href="index.php">accueil</a></li><!--
  --> <li ><a class="oc-lien" href="planning.php">planning</a></li>
   
      <li><a class="oc-lien" href="contact.php">contact</a></li>
    
   </div>
  </div>
 <div class="oc-container">
  <h3 class="oc-menu">sites utiles</h3>
   <div class="oc-columns">
    <ul class="oc-nav2">
      <li ><a class="oc-lien" href="https://www.football365.fr/">foot365</a></li>
      <li ><a class="oc-lien" href="mailto:olivier.crozet@laplateforme.io">mail</a></li>
    </ul>
   </div>
  </div>
 
</footer>
     </body>
     </html>