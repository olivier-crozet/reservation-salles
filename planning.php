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

          <!--DEBUT CALENDRIER-->

<table class="table-affichage">
  <!--titre des colone-->
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

//affichage de la heure actuel

echo "$h h";

//recuperation des données
$da = date('Y-m-d');
$dda = $da.' '.'08:00:00';
$sda = $da.' '.'19:00:00';
$popey = $jourtimestamp;
$jourr = gmdate($popey);
//$reqtitrea = "SELECT * FROM  `reservations` where debut=";
//RAJOUTER UNE VARIABLE DATE DU JOUR ET UNE AUTRE +24H
$datepourdebut = date("Y-m-d h:i:s");

//aujourdhuit
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
echo "<tr><td>".$jour."</td>";
foreach ($una as $key ) {
 
  //     $i = 0;
  //     while ( $i <= $a) 
    //   {
        
        echo  "<tr><td>  </td><td>".$key['titre']."</td><td>".$key['debut']."</td><td>".$key['fin']."</td><td>".$data."</td></tr>";
   //      $i = $i + 1 ;
    //   }
  
                       }  

  //jour1    
  $reqtitre = "SELECT * FROM  `reservations` where debut BETWEEN '$jour1' AND 'jour1b' ;";
  $req_jointe_bdd = mysqli_query($connexion,$reqtitre);
    $un = mysqli_fetch_ALL($req_jointe_bdd);
    $pd = $demainjour + 86400 ;
         $data1 = date("d-m-Y", strtotime("+1 days"));
         var_dump($data1);
      // $data1 = $data = date("d-m-Y");
       $jour2 = gmdate("l",$pd);
       $jourr2 = gmdate("Y-m-d",$pd);
       $day2 = $jourr2.' '.'08:00:00';
       $day2b = $jourr.' '.'19:00:00';
       echo "<tr><td>".$demain."</td><td>".' '."</td><td>".' '."</td><td>".' '."</td><td>".$data1."</td></tr>";
foreach ($un as $ke ) {  
       echo "<tr><td>   </td><td>".$ke['titre']."</td><td>".$ke['debut']."</td><td>".$ke['fin']."</td><td>".$data1."</td></tr>";     
                         }

//jour2
 $reqtitreb = "SELECT * FROM  `reservations` where debut BETWEEN '$day2' AND '$day2b' ;";
  $req_jointe_bddv = mysqli_query($connexion,$reqtitreb); 
    $unb = mysqli_fetch_ALL($req_jointe_bddv);
      $pa = $pd + 86400 ;
      $data2 = date("d-m-Y", strtotime("+2 days"));
       $jour3 = gmdate("l",$pa);
       $jour33 =gmdate("Y-m-d",$pa);
       $day3 = $jour33.' '.'08:00:00';
       $day3b = $jour33.' '.'19:00:00';
       echo "<tr><td>".$jour2."</td><td>".' '."</td><td>".' '."</td><td>".' '."</td><td>".$data2."</td></tr>";
foreach ($unb as $ky ) {
       echo "<tr><td>   </td><td>".$ky['titre']."</td><td>".$ky['debut']."</td><td>".$ky['fin']."</td><td>".$data2."</td></tr>";
                        }
//jour3 
       $requettejour3 ="SELECT * FROM `reservations` where debut BETWEEN '$day3' AND '$day3b' ;";
        $req_jointe_bdde = mysqli_query($connexion,$requettejour3);
        $unc = mysqli_fetch_ALL($req_jointe_bdde);
        $paa = $pa +86400 ;
        $data3 = date("d-m-Y", strtotime("+2 days"));
        $jour4 = gmdate("l",$paa);
        $jour44 = gmdate("Y-m-d",$paa);
        $day4 = $jour4.' '.'08:00:00';
        $day4b = $jour44.' '.'19:00:00';
        echo "<tr><td>".$jour3."</td><td>".' '."</td><td>".' '."</td><td>".' '."</td><td>".$data3."</td></tr>";
foreach ($unc as $keeb ) {
       
       echo "<tr><td>".$jour3."</td><td>".$keeb[1]."</td><td>".$keeb[3]."</td><td>".$keeb[4]."</td><td>".$data3."</td></tr>";
                              }              
  //jour4
           $requettejour4 ="SELECT * FROM `reservations` where debut BETWEEN '$day4' AND '$day4b' ;";
        $req_jointe_bddea = mysqli_query($connexion,$requettejour4);
        $unc1 = mysqli_fetch_ALL($req_jointe_bddea); 
        $paa1 = $paa +86400 ;
        $data4 = date("d-m-Y", strtotime("+3 days"));
        $jour5 = gmdate("l",$paa1);
        $jour55 = gmdate("Y-m-d",$paa1);
        $day5 = $jour5.' '.'08:00:00';
        $day5b = $jour55.' '.'19:00:00';
        echo "<tr><td>".$jour4."</td><td>".' '."</td><td>".' '."</td><td>".' '."</td><td>".$data4."</td></tr>";
foreach ($unc1 as $keeb1 ) {
       
       echo "<tr><td>".$jour4."</td><td>".$keeb1[1]."</td><td>".$keeb1[3]."</td><td>".$keeb1[4]."</td><td>".$data4."</td></tr>";
                              }              

//jour5

        $requettejour5 ="SELECT * FROM `reservations` where debut BETWEEN '$day5' AND '$day5b' ;";
        $req_jointe_bddea1 = mysqli_query($connexion,$requettejour5);
        $unc2 = mysqli_fetch_ALL($req_jointe_bdde1);
        $paa2 = $paa1 +86400 ;
        $data5 = date("d-m-Y", strtotime("+4 days"));
        $jour6 = gmdate("l",$paa2);
        $jour66 = gmdate("Y-m-d",$paa2);
        $day6 = $jour6.' '.'08:00:00';
        $day6b = $jour66.' '.'19:00:00';
        echo "<tr><td>".$jour5."</td><td>".' '."</td><td>".' '."</td><td>".' '."</td><td>".$data5."</td></tr>";
foreach ($unc2 as $keeb2 ) {
       
       echo "<tr><td>".$jour5."</td><td>".$keeb2[1]."</td><td>".$keeb2[3]."</td><td>".$keeb2[4]."</td><td>".$data5."</td></tr>";
                              } 

//jour6

        $requettejour5 ="SELECT * FROM `reservations` where debut BETWEEN '$day6' AND '$day6b' ;";
        $req_jointe_bddea2 = mysqli_query($connexion,$requettejour6);
        $unc2 = mysqli_fetch_ALL($req_jointe_bdde2);
        $paa3 = $paa2 +86400 ;
        $data6 = date("d-m-Y", strtotime("+5 days"));
        $jour7 = gmdate("l",$paa3);
        $jour77 = gmdate("Y-m-d",$paa3);
        $day7 = $jour7.' '.'08:00:00';
        $day7b = $jour77.' '.'19:00:00';
        echo "<tr><td>".$jour6."</td><td>".' '."</td><td>".' '."</td><td>".' '."</td><td>".$data7."</td></tr>";
foreach ($unc3 as $keeb3 ) {
       
       echo "<tr><td>".$jour6."</td><td>".$keeb3[1]."</td><td>".$keeb3[3]."</td><td>".$keeb3[4]."</td><td>".$data6."</td></tr>";
                              } 

  //     $pe = $pa + 86400 ;
   //    $jour4 = gmdate("l",$pe);
   //    echo "<tr><td>$jour4</td></tr>";

   //    $pu = $pe + 86400 ;
   //    $jour5 = gmdate("l",$pu);
    //   echo "<tr><td>$jour5</td></tr>";

    //   $po = $pu + 86400 ;
    //   $jour6 = gmdate("l",$po);
     //  echo "<tr><td>$jour6</td></tr>";

     //  $pi = $po + 86400 ;
     //  $jour7 = gmdate("l",$pi);
      // echo  "<tr><td>$jour7</td></tr>";




?>
</table>
</div>
</main>
</section>
</body>
</html>
