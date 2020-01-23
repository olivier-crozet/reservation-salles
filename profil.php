<?php
session_start();
               //si on clique sur la connexion
 if (!empty($_POST['formdeconexion'])) 
    {   	
    unset ( $_SESSION ['id'] );
    unset ($_SESSION['login']);	
$erreur="<p class='codeerreur'>vous n'etes pas connecté !";
    }
?>

<html>
<head>
	   <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="nav.css">
     <link rel="stylesheet" type="text/css" href="css/profil.css">

     <title>futsal club</title>
</head>
       <body class="oc-body-accueil-btp">
  

					 <!--HEADER ADMIN -->
     <section class="section-deventure">      
  <header class="oc-header-btp">
  	<h1 class="titreh">Futsal club Arancioneri</h1>
  	</header>
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
                         ?>
               <li><a class="ah"  href="planning.php">voir le planning</a>                        
              <?php
                    if  (isset($_SESSION['id'])) 
                    	{ 
                    		echo  '<li>'.'<a class="ah"  href= "connexion.php">'."connection".'</a>'.'</li>';
                        }
                      ?>       
               <li><a class="ah"  href="mailinto:olivier.crozet@gmail.com">contact</a></li>
          </ul>

       </nav>
  <!--FIN NAV ADMIN-->

<main>
  <section>
<?php
   $connexion=mysqli_connect("localhost","root","","reservationsalles");

   

   //REQUETTE SELECTLOGIN BY ID
   $psedo=("SELECT 'login' FROM utilisateurs' where id='$id'");
   $reqpsedo = mysqli_query($connexion,$psedo);

    $retour=mysqli_fetch_array($reqpsedo);
var_dump($psedo);
?>
  </section>


</main>
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
 </section>
</footer>
</body>
</html>