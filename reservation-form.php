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
                         echo "<li><a class=\"ah\"  href=\"reservation-form.php\">réservation</a></li>";
                         }
                         ?><!--
              --><li><a class="ah"  href="planning.php">voir le planning</a>

                         <li><a class="ah"  href="mailto:olivier.crozet@gmail.com">contact</a></li>
            <?php
                    if  (isset($_SESSION['id'])) 
                    	{ 
                    		 ?>
                        <li><form  method="POST" action="">
                          <input  class="deco" type="submit" name="deconection" value="se deconnecté">
                        </form></li>
                        <?php
                    }        
                    ?>          
          </ul>

       </nav>
       <main>
        <header class="oc-header-btp">
          <h1>reserver votre salle en remplissant se formulaire !<h1>
        </header>


        <!--DEBUT TABLE-->
<form class="form" method="POST" action="" >
        <table class="tablinscri">
          <tr>
            <td>
              <label  for="titreform"> titre :</label>
        </td>
        <td>
              <input type="text" name="titre" placeholder="ecrire le titre" value="titre">
            </td>
          </tr>
           <tr>
            <td>
              <label  for="titreform"> description :</label>
        </td>
        <td>
              <input type="text" name="description" placeholder="description" value="description">
            </td>
          </tr>
           <tr>
            <td>
              <label  for="titreform">date du jour :</label>
        </td>
        <td>
              <input type="date" name="date" placeholder="date" value="date">
            </td>
          </tr>
          
           
          <!--parti time-->
          <tr>
            <td>
              <label  for="titreform">heure de debut :</label>
        </td>
        <td>
              <input type="time" name="heuredebut" placeholder="" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label  for="titreform">heure de fin :</label>
        </td>
        <td>
              <input type="time" name="heurfin" placeholder="" value="">
            </td>
          </tr>
      <!--    <tr>
             <td>
                <label  for="password2">confirmer votre mot de passe :</label>
              </td>
              <td>
                <input type="password" name="password2" placeholder="ecrire votre mot de passe">
              </td>
          </tr> -->
          
        </table>
      
        <br/>
                <input  class="buton-inscription" type="submit" name="submit" value="Valider"/>
              
<?php
if (isset($_POST['submit'])) 
{ 
    if (strlen($_POST['titre']) > 100) 
    {
      echo "tu te fou de moi !";
    }
    else{

  
      $titreresa=htmlspecialchars($_POST['titre']);
      $description=htmlspecialchars($_POST['description']);
      $idresa=($_SESSION['id']);
      //$password2= password_hash($_POST["password2"], PASSWORD_DEFAULT,array('cost'=> 12));
      

         $requete=("SELECT password FROM utilisateurs  where id = '$idresa' ");
            $sql=mysqli_query($connexion,$requete);
            $retour=mysqli_fetch_array($sql);

           //  if (password_verify($_POST['password2'], $retour['password']))
               //  { 
                    $heuredebut=$_POST['heuredebut'];
                        
                    $heurefin=$_POST['heurfin'];
                    $testheure = strtotime($_POST['heuredebut']);
                    $datenew = $_POST['date'];     
                    $datetime = $datenew." ".$heuredebut;
                     $datetimefin = $datenew." ".$heurefin;
                  //  $datetimef = date("Y-m-d H:i:s", strtotime($heurefin));
                    // $datetimed = date("Y-m-d H:i:s", strtotime($heuredebut)); 
                    //
                      if ($heuredebut >= "08:00"  && $heuredebut <= "19:00" && $heurefin >= "09:00" && $heurefin <= "19:00"  ) 
                     {
                      //preparation heure 
                      $degrdarc = strtotime($heuredebut);
                      $degrdarcd = $degrdarc - 3600 ;
                      $degrdarcff = strtotime($heurefin);
                      $degrdarcf = $degrdarcff -3600 ;   
                      
                      $heure = $degrdarcf - $degrdarcd;
                      //date et temp time stamp
                      $datetimest = strtotime($datetime);
                
                       

                      //if heure pleine

                         if ( /*$heure == 0 or */ $heure == 3600)  /* or $heure ==7200 or $heure == 10800 or $heure == 14400 or $heure ==18000 or $heure == 21600 or $heure == 25200 or $heure == 28800 or $heure == 32400 or $heure == 36000 or $heure == 39600 */ 
                          //poissible aussi
                          //if( $heure %3600 ==0)  DIVISIBLE PAR 3600

                         { 
                            //preparation samedi dimache
                             $tabDate = explode('-', $_POST['date']); //FONCTION ??
         
                             $timestamp = mktime(0, 0, 0, $tabDate[1], $tabDate[2], $tabDate[0]);//FONCTION ??
                              $jour = date('w', $timestamp);
                              

                              //if samedi dimache 
                              if ($jour != "6" && $jour != "0")
                               {    
                                    $requete=("SELECT debut FROM reservations where debut = '$datetime'");
                                  
                                    $sql=mysqli_query($connexion,$requete);
                                   
                                    $retour=mysqli_num_rows($sql);
                                    $retourt=mysqli_fetch_array($sql);
                                    $retourstamp=strtotime($retourt[0]);
                                    
                                   
                                 
                                        if ( $retour == 0  && $retourstamp != $datetimest )
                                         {
                                         
                                        $datexx = ($_POST['heuredebut']);
                                        $datex = $datexx ;
                                        $datexxx = $datenew.$datexx;
                                      
                                        $dato = strtotime($datexxx);
                                        //$dati = $dato + 3600 ;

                                        //pas de reservation avant
                                        $datas = date("Y-m-d");
                                        $heuras = date("H:i:s");
                                      
                                        $verif = $datas.$heuras;
                                        $verifstamp = strtotime($verif);

              
                                            if ( $verifstamp < $dato  ) 
                                             {
                                             
                                             
                             $requetinser="INSERT INTO reservations(titre,description,debut,fin,id_utilisateur,tempsegonde)
                             VALUES (\"$titreresa\",\"$description\",\"$datetime\",\"$datetimefin\",\"$idresa\",\"$dato\");";                
                            $inser= mysqli_query($connexion, $requetinser);
                    
                            header("location:reservation.php?$titreresa?id=$idresa");
                                 
                                            }
                                            else
                                            {
                                              echo "la date est obsolète !";
                                            }

                                   }
                                   else
                                   {
                                    echo "ces dates sont deja prise !";
                                   }
                              }

                           else
                            {
                            echo "fermer le samedi et dimanche !";
                            }
                       }
                       else
                       {
                        echo "location par heure !";
                       }
                   }
                   else
                   {
                    echo "Heure d'ouverture de 8H à 19H !";
                   }
                // }
             //   else
              //{
                //echo"Le mot de passe ne correspond pas !";
              //}
         }

}
?>
 </form> 
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