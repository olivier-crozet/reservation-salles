<?php
session_start();
               //si on clique sur la connexion
$connexion=mysqli_connect("localhost","root","","reservationsalles");

 if (!empty($_POST['formdeconexion']) OR !empty($_POST['deconection'])) 
    {   	
    unset ( $_SESSION ['id'] );
    unset ($_SESSION['login']);	
$erreur="<p> class='codeerreur'>vous n'etes pas connecté !</p>";
    }
    if (!isset($_SESSION['login'])) 
    {
      header ("location: connexion.php") ;
    }
?>

<html>
<head>
	   <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="nav.css">
     <link rel="stylesheet" type="text/css" href="css/reservation.css">
    <link rel="stylesheet" type="text/css" href="css/reservationbis.css">


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
                         echo "<li><a class=\"ah\"  href=\"reservation-form.php\">réservation</a></li>";
                         }
                         ?><!--
              --><li><a class="ah"  href="planning.php">voir le planning</a></li>

                         <li><a class="ah"  href="mailto:olivier.crozet@gmail.com">contact</a></li>
            <?php
                    if  (isset($_SESSION['id'])) 
                    	{ 
                    		 ?>
                        <li><form  method="POST" action=""><input  class="deco" type="submit" name="deconection" value="se deconnecté"></form></li>
                        <?php
                        }
                      ?>                     
          </ul>

       </nav>
       <header class="titreresah">
         <h1>vos reservation !</h1>
       </header>
       <main>
        <?php

  if (isset($_SESSION['id'])) 
  {
    $idresa=$_SESSION['id'];
    $login=$_SESSION['login'];

        $reqpse = "SELECT login FROM utilisateurs where id=$idresa";
        $reqpsebdd = mysqli_query($connexion,$reqpse) ;
        $balek = mysqli_fetch_array($reqpsebdd);
        $couille = $balek['login'];
        


        $req_jointe = "SELECT  debut,  fin  FROM reservations  where id_utilisateur=$idresa " ;
        
  $req_jointe_bdd = mysqli_query($connexion,$req_jointe);

    $row = mysqli_fetch_all($req_jointe_bdd);
    
  }
?>


           <div class="div-affichage">
       <table class="table-affichage">  
               <tr class="psedo-affichage">
                  <td class="taillepse">titre</td>
                  <td class="texttd">debut</td>  
                  <td date-affichage >fin</td>    
               </tr>         
      <?php 


     foreach ( $row as $key )
      {
          if (!empty($key[1]))
          {
            
            
              if (isset($login) == $key[0]) 
          
                  {
                     
                    echo "<tr class=\"psedo-affichage\"><td class=\"taillepse\" >".$couille.":"."</td>"."<td class=\"texttd\" >".$key[0]."</td>"."<td class=\"date-affichage\">".$key[1]."<td>"."</tr>";
                  }

                else{
                  echo "connecte toi blerot";
                      }
         }
         }             
     

//endforeach ;
?>

</table>
</section>
</div>

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

 
</footer>
     </body>
     </html>
