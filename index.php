
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
     <link rel="stylesheet" type="text/css" href="css/index.css">

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
 <!-- 
    <video controls autoplay loop class="video">
        <source src="image/backvideo.mp4" type="video/mp4"> -->
          <article class="article1" >
          <p class="presentation">Le futsal est un sport collectif apparenté au football. Comme lui, il se joue principalement au pied avec un ballon sphérique. Il oppose deux équipes de cinq joueurs dans un gymnase, sur un terrain de handball. L'objectif de chaque équipe est de mettre le ballon dans le but adverse, sans utiliser les bras, et de le faire plus souvent que l'autre équipe.

Cette discipline est inventée par l'Argentin Juan Carlos Ceriani Gravier, membre de la YMCA de Montevideo en Uruguay, à la suite de la Coupe du monde de football de 1930 dans ce même pays et le manque de terrain pour permettre aux enfants de jouer. De 1930 à 1933, il crée les règles spécifiques de ce qui est alors appelé le « football de salon ». La dénomination de « futsal » apparait dans les années 1980. La FIFA souhaite récupérer le contrôle de ce qu'elle voit comme un dérivé de son football. Devant le refus de la FIFUSA, elle interdit l'utilisation du mot « football » d'où l'invention du diminutif « futsal ». Les deux fédérations internationales (l'AMF prenant la suite de la FIFUSA) s'opposent depuis pour la gouvernance de ce sport.</p>

<article class="article-logo1">
          <div class="div-logo">
               <a class="liens"  href="inscription.php"><img  class="image-inscription" src="image/inscription.jpg"> <div class="infobulle1">Inscrivez vous ici</div></a>
            


              <a class="liens"  href="connexion.php"><img class="image-inscription" src="image/connexion.png"> <div class="infobulle1">Connectez-vous ici !</div></a>
         </div>
         <div class="div-logo">
               <a class="liens" href="planning.php"><img class="image-inscription" src="image/planning.jpg"><div class="infobulle1">voir le planning !</div></a>
         </div>
         <div class="div-logo">
               <a class="liens"  href="reservation.php"><img  class="image-inscription" src="image/reservation.png"> <div class="infobulle1">Inscrivez vous ici !</div></a>
            


              <a class="liens"  href="mailto:olivier.crozet@laplateforme.io"><img class="image-inscription" src="image/mail.png"> <div class="infobulle1">envoyez nous un mail !</div></a>
         </div>

</article>
        </article>
  </section>
</main>
<footer>
  <section class="oc-footer-navigation">
  <div class="oc-container">
   <h3 class="oc-menu">Menu</h3>
    <div class="oc-columns">
     <ul class="oc-nav2">
      <li ><a class="oc-lien" href="index.php">accueil</a></li><!--
  --> <li ><a class="oc-lien" href="livre-or.php">livre or</a></li><!--
   --><li ><a class="oc-lien" href="projet.php/cv/cvolivier.html">cv</a></li>
      <li><a class="oc-lien" href="contact.php">contact</a></li>
    
   </div>
  </div>
 <div class="oc-container">
  <h3 class="oc-menu">Réseau</h3>
   <div class="oc-columns">
    <ul class="oc-nav2">
      <li ><a class="oc-lien" href="https://www.linkedin.com/">LinkedIn</a></li>
      <li ><a class="oc-lien" href="mailto:olivier.crozet@laplateforme.io">mail</a></li>
    </ul>
   </div>
  </div>
 </section>
</footer>
</body>
</html>
	  				