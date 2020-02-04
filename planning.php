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
        <div class="div-tabl">

<table class="table-affichage">
  <thead>
    <tr><td>jour</td><td>titre</td><td>debut</td><td>fin</td><td>date</td></tr>
  </thead>
<?php
//jour d'aujourduit
$jour = date('l');
//anne mois jour
$datetimed = date("Y-m-d");
$data = date("d-m-Y");
//heure
$h = date("H");

$jourtimestamp = strtotime($jour);



echo "$h h";

$popey = $jourtimestamp;
$jourr = gmdate($popey);
$reqtitrea = "SELECT * FROM  `reservations` where tempsegonde=$popey ;";
  $req_jointe_bdda = mysqli_query($connexion,$reqtitrea);
    $una = mysqli_fetch_assoc($req_jointe_bdda);


      echo "<tr><td>".$jour."</td><td>".$una['titre']."</td><td>".$una['debut']."</td><td>".$una['fin']."</td><td>".$data."</td></tr>";

      $demainjour = $jourtimestamp + 86400 ;
       $demain = gmdate("l", $demainjour);
       $demaind = gmdate("d-m-Y",$demainjour);
      
  $reqtitre = "SELECT * FROM  `reservations` where tempsegonde=$demainjour ;";
  $req_jointe_bdd = mysqli_query($connexion,$reqtitre);
    $un = mysqli_fetch_assoc($req_jointe_bdd);
  
   
       echo "<tr><td>$demain</td><td>".$un['titre']."</td><td>".$un['debut']."</td><td>".$un['fin']."</td><td>".$demaind."</td></tr>";
      


       $pd = $demainjour + 86400 ;
       $jour2 = gmdate("l",$pd);


       echo "<tr><td>$jour2</td></tr>";

       $pa = $pd + 86400 ;
       $jour3 = gmdate("l",$pa);
       echo "<tr><td>$jour3</td></tr>";

       $pe = $pa + 86400 ;
       $jour4 = gmdate("l",$pe);
       echo "<tr><td>$jour4</td></tr>";

       $pu = $pe + 86400 ;
       $jour5 = gmdate("l",$pu);
       echo "<tr><td>$jour5</td></tr>";

       $po = $pu + 86400 ;
       $jour6 = gmdate("l",$po);
       echo "<tr><td>$jour6</td></tr>";

       $pi = $po + 86400 ;
       $jour7 = gmdate("l",$pi);
       echo  "<tr><td>$jour7</td></tr>";


    //    $i++;


//}
//while ( $i <= 7)
  //   {
      

    //  $demainjour = $jourtimestamp +  86400;
    //   $demain = gmdate("l", $demainjour);
     //  echo "$demain";
      
     //  $i++;
     
     //}
//}

?>
</table>
</div>
</main>
</section>
</body>
</html>
