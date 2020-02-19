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
       

        <table>
           <thead>
             <tr>
               <td>lundi</td><td><a href="reservation-form.php>"><?php
               $lundi = strtotime('monday');
               var_dump($lundi);
               $data = date("d-m-Y");
               $jour = date('l');
               $jourtimestamp = strtotime($jour);
               $da = date('Y-m-d');
               $dda = $da.' '.'08:00:00';
               $sda = $da.' '.'19:00:00';

               $reqtitrea = ("SELECT * FROM reservations WHERE debut BETWEEN  '$dda' AND '$sda'");
               $req_jointe_bdda = mysqli_query($connexion,$reqtitrea);
               $una = mysqli_fetch_ALL($req_jointe_bdda,MYSQLI_ASSOC);
               $a = count($una);
//preparation pour jour suivent
               $demainjour = $jourtimestamp + 86400 ;
               $demain = gmdate("l", $demainjour);
    
               $demaind = gmdate("Y-m-d",$demainjour);
               $jour1 = $demaind.' '.'08:00:00';
               $jour1b = $demaind.' '.'19:00:00';

               if ($a <= 0) 
               {
                echo "<a href = \"reservation-form.php\">reserver en cliquant ici !</a>";
              }
              else
              {
              
        foreach ($una as $key  ) {  
                  echo  $key['titre'];
                       }  
       }
       ?></td></a><td>
         <?php
          if ($a <= 0) 
               {
                echo "<a href = \"reservation-form.php\">reserver en cliquant ici !</a>";
              }
              else
              {
              
        foreach ($una as $key  ) {  
                  echo  $key['debut'];
                       }
                       }  
         ?>
       </td><td>
       <?php
        if ($a <= 0) 
               {
                echo "<a href = \"reservation-form.php\">reserver en cliquant ici !</a>";
              }
              else
              {
              
        foreach ($una as $key  ) {  
                  echo  $key['fin'];
                       }
                       }  
       ?>
       </td>
       <td>date</td>
             </tr>
             <tr>
               <td>mardi</td>
              </tr>
              <tr>
                <td>mecredi</td>
              </tr>
              <tr>
                <td>jeudi</td>
              </tr>
              <tr>
                <td>vendredi</td>
              </tr>
           </thead>

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
