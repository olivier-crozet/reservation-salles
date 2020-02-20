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
                    	 ?>
                        <li><form  method="POST" action=""><input  class="deco" type="submit" name="deconection" value="se deconnecté"></form></li>
                        <?php
                        }
                      ?>                     
          </ul>
       </nav>
       <main>



        <header class="oc-header-btp">
          <h1>planning !<h1>
        </header>
       
<?php 

include ('annexe/lundi.php');  



 ?>
        <table>
           <thead>
            <tr>
              <td></td><td>lundi</td><td>mardi</td><td>mecredi</td><td>jeudi</td><td>vendredi</td>
            </tr>
           </thead>
             <tr>
             <td>08h-09h</td><td class="lun" ><?php if ($una >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class 'lun' class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td  class="mar" ><?php if ($mar1 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="mer" ><?php if ($mer1 >=1 ) { echo "<a class='red' href =reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="jeu"><?php if ($jeu1 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class 'ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="ven"><?php if ($ven1 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td>
             </tr>
             <tr>
             <td>09h-10h</td><td class="lun" ><?php if ($una2 >=1 ) { echo "<a class='red' href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="mar" ><?php if ($mar2 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class='mer' ><?php if ($mer2 >=1 ) { echo "<a class='red' href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class='jeu'><?php if ($jeu2 >=1 ) { echo "<a class='red'href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="ven" ><?php if ($ven2 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td>
             </tr>
             <tr>
             <td>10h-11h</td><td class="lun" ><?php if ($una3 >=1 ) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="mar" ><?php if ($mar3 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="mer" ><?php if ($mer3 >=1 ) { echo "<a class='red' href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="jeu"><?php if ($jeu3 >=1 ) { echo "<a class='red' href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="ven" ><?php if ($ven3 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td>
             </tr>
             <tr>
             <td>11h-12h</td><td class="lun" ><?php if ($una4 >=1 ) { echo "<a class='red' href =reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="mar" ><?php if ($mar4 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="mer" ><?php if ($mer4 >=1 ) { echo "<a class='red' href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="jeu"><?php if ($jeu4 >=1 ) { echo "<a class='red' href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="ven" ><?php if ($ven4 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td>
             </tr>
             <tr>
             <td>12h-13h</td><td class="lun" ><?php if ($una5 >=1 ) { echo "<a class='red' href =reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="mar" ><?php if ($mar5 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="mer" ><?php if ($mer5 >=1 ) { echo "<a class='red' href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="jeu" ><?php if ($jeu5 >=1 ) { echo "<a class='red' href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="ven" ><?php if ($ven5 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td>
             </tr>
             <tr>
             <td>13h-14h</td><td class="lun" ><?php if ($una6 >=1 ) { echo "<a class='red' href =reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="mar" ><?php if ($mar6 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="mer" ><?php if ($mer6 >=1 ) { echo "<a class='red' href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="jeu"><?php if ($jeu6 >=1 ) { echo "<a class='red' href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="ven" ><?php if ($ven6 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td>
             </tr>
             <tr>
             <td>14h-15h</td><td class="lun" ><?php if ($una7 >=1 ) { echo "<a class='red' href =reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="mar" ><?php if ($mar7 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="mer" ><?php if ($mer7 >=1 ) { echo "<a class='red' href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="jeu" ><?php if ($jeu7 >=1 ) { echo "<a class='red' href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class ='ven'><?php if ($ven7 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td>
             </tr>
             <tr>
             <td>15h-16h</td><td class="lun" ><?php if ($una8 >=1 ) { echo "<a class='red' href =reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class='mar' ><?php if ($mar8 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class='mer'><?php if ($mer8 >=1 ) { echo "<a class='red' href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="jeu"><?php if ($jeu8 >=1 ) { echo "<a class='red' href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td  class='ven'><?php if ($ven8 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td>
             </tr>
             <td>16h-17h</td><td class="lun" ><?php if ($una9 >=1 ) { echo "<a class='red' href =reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="mar" ><?php if ($mar9 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class='mer' ><?php if ($mer9 >=1 ) { echo "<a class='red' href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="jeu" ><?php if ($jeu9 >=1 ) { echo "<a class='red' href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="ven" ><?php if ($ven9 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td>
             <tr>
             <td>17h-18h</td><td class="lun" ><?php if ($una10 >=1 ) { echo "<a class='red' href =reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="mar"><?php if ($mar10 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="mer" ><?php if ($mer10 >=1 ) { echo "<a class='red' href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="jeu" ><?php if ($jeu10 >=1 ) { echo "<a class='red' href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="ven" ><?php if ($ven10 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td>
             </tr>
             <tr>
             <td>18h-19h</td><td class="lun" ><?php if ($una11 >=1 ) { echo "<a class='red' href =reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="mar"><?php if ($mar11 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="mer"><?php if ($mer11 >=1 ) { echo "<a class='red' href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class="jeu" ><?php if ($jeu11 >=1 ) { echo "<a class='red' href=reservation.php>"."deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td><td class='ven'><?php if ($ven11 >= 1) { echo "<a class='red' href=reservation.php>"." deja reserver"."</a>"; } else {echo "<a class='ble' href= reservation-form.php>"."reserver ce crenaux"."</a>";} ?></td>
             </tr>
          

          

        </table>
<?php 
if (isset($una)) {
 echo '<font size= "5px" color="red">'.$una.'</font>';
}
?>


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
