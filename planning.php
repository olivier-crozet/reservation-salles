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

?>
<!
<html>
<head>
	   <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="nav.css">
     <link rel="stylesheet" type="text/css" href="css/planning.css">

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
              --><li><a class="ah"  href="planning.php">voir le planning</a>

                         <li><a class="ah"  href="mailto:olivier.crozet@gmail.com">contact</a></li>
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
          <h1>planning !<h1>
        </header>
       
<?php 

//le lundi1 au soleil
$monda = strtotime('Monday');
$monday1 = $monda + 28800;
var_dump($monday1);
$reqtitrea = ("SELECT * FROM reservations WHERE tempsegonde = '$monday1' ");
$req_jointe_bdda = mysqli_query($connexion,$reqtitrea);
    $una = mysqli_num_rows($req_jointe_bdda);

//lundi 09H 10H
$monda2 = strtotime('Monday');
$monday2 = $monda2 + 28800+3600;
var_dump($monday2);
$reqtitrea2 = ("SELECT * FROM reservations WHERE tempsegonde = '$monday2' ");
$req_jointe_bdda2 = mysqli_query($connexion,$reqtitrea2);
    $una2 = mysqli_num_rows($req_jointe_bdda2);

//lundi 10H 11H

$monda3 = strtotime('Monday');
$monday3 = $monda3 + 28800+7200;
$reqtitrea3 = ("SELECT * FROM reservations WHERE tempsegonde = '$monday3' ");
$req_jointe_bdda3 = mysqli_query($connexion,$reqtitrea3);
    $una3 = mysqli_num_rows($req_jointe_bdda3);
   
//lundi 11H 12H

$monda4 = strtotime('Monday');
$monday4 = $monda4 + 28800+10800;
$reqtitrea4 = ("SELECT * FROM reservations WHERE tempsegonde = '$monday4' ");
$req_jointe_bdda4 = mysqli_query($connexion,$reqtitrea4);
    $una4 = mysqli_num_rows($req_jointe_bdda4);

//lundi 12H 13H

$monda5 = strtotime('Monday');
$monday5 = $monda5 + 28800+14400;
$reqtitrea5 = ("SELECT * FROM reservations WHERE tempsegonde = '$monday5' ");
$req_jointe_bdda5 = mysqli_query($connexion,$reqtitrea5);
    $una5 = mysqli_num_rows($req_jointe_bdda5);

//lundi 13H 14H

$monda6 = strtotime('Monday');
$monday6 = $monda6 + 28800+18000;
$reqtitrea6 = ("SELECT * FROM reservations WHERE tempsegonde = '$monday6' ");
$req_jointe_bdda6 = mysqli_query($connexion,$reqtitrea6);
    $una6 = mysqli_num_rows($req_jointe_bdda6);

//lundi 14H 15H

$monda7 = strtotime('Monday');
$monday7 = $monda7 + 28800+21600;
$reqtitrea7 = ("SELECT * FROM reservations WHERE tempsegonde = '$monday7' ");
$req_jointe_bdda7 = mysqli_query($connexion,$reqtitrea7);
    $una7 = mysqli_num_rows($req_jointe_bdda7);

//lundi 16H 17H

$monda8 = strtotime('Monday');
$monday8 = $monda8 + 28800+25200;
$reqtitrea8 = ("SELECT * FROM reservations WHERE tempsegonde = '$monday8' ");
$req_jointe_bdda8 = mysqli_query($connexion,$reqtitrea8);
    $una8 = mysqli_num_rows($req_jointe_bdda8);

//lundi 17H 18H

$monda9 = strtotime('Monday');
$monday9 = $monda9 + 28800+28800;
$reqtitrea9 = ("SELECT * FROM reservations WHERE tempsegonde = '$monday9' ");
$req_jointe_bdda9 = mysqli_query($connexion,$reqtitrea9);
    $una9 = mysqli_num_rows($req_jointe_bdda9);

//lundi 17H 18H 

$monda10 = strtotime('Monday');
$monday10 = $monda10 + 28800+32400;
$reqtitrea10 = ("SELECT * FROM reservations WHERE tempsegonde = '$monday10' ");
$req_jointe_bdda10 = mysqli_query($connexion,$reqtitrea10);
    $una10 = mysqli_num_rows($req_jointe_bdda10);

 ?>
        <table>
           <thead>
            <tr>
              <td></td><td>lundi</td><td>mardi</td><td>mecredi</td><td>jeudi</td><td>vendredi</td>
            </tr>
           </thead>
             <tr>
             <td>08h-09h</td><td><?php if ($una >= 1) { echo "<a href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td>frfrf</td>
             </tr>
             <tr>
             <td>09h-10h</td><td><?php if ($una2 >=1 ) { echo "<a href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td>
             </tr>
             <tr>
             <td>10h-11h</td><td><?php if ($una3 >=1 ) { echo "<a href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td>
             </tr>
             <tr>
             <td>11h-12h</td><td><?php if ($una4 >=1 ) { echo "<a href =reservation.php>"."deja reserver"."</a>"; } else {echo "<a href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td>
             </tr>
             <tr>
             <td>12h-13h</td><td><?php if ($una5 >=1 ) { echo "<a href =reservation.php>"."deja reserver"."</a>"; } else {echo "<a href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td>
             </tr>
             <tr>
             <td>13h-14h</td><td><?php if ($una6 >=1 ) { echo "<a href =reservation.php>"."deja reserver"."</a>"; } else {echo "<a href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td>
             </tr>
             <tr>
             <td>14h-15h</td><td><?php if ($una7 >=1 ) { echo "<a href =reservation.php>"."deja reserver"."</a>"; } else {echo "<a href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td>
             </tr>
             <tr>
             <td>15h-16h</td><td><?php if ($una8 >=1 ) { echo "<a href =reservation.php>"."deja reserver"."</a>"; } else {echo "<a href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td>
             </tr>
             <td>16h-17h</td><td><?php if ($una9 >=1 ) { echo "<a href =reservation.php>"."deja reserver"."</a>"; } else {echo "<a href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td>
             <tr>
             <td>17h-18h</td><td><?php if ($una10 >=1 ) { echo "<a href =reservation.php>"."deja reserver"."</a>"; } else {echo "<a href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td>
             </tr>
             <tr>
             <td>18h-19h</td>
             </tr>
          

          

        </table>



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
