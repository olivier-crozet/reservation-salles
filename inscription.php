<?php
session_start();
               //si on clique sur la connexion
$connexion=mysqli_connect("localhost","root","","reservationsalles");

 if (!empty($_POST['formdeconexion'])) 
    {   	
    unset ( $_SESSION ['id'] );
    unset ($_SESSION['login']);	
$erreur="<p class='codeerreur'>vous n'etes pas connecté !";
    }
?>
<!
<html>
<head>
	   <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="nav.css">
     <link rel="stylesheet" type="text/css" href="css/inscription.css">

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
                         }
                         ?>
              <li><a class="ah"  href="planning.php">voir le planning</a>

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
          <h1>Insrivez-vous !<h1>
        </header>
<form class="form" method="POST" action="" >
<?php


if (!empty($_POST["submit"])) 
{

      if (!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['password2'])) 
      {
                 if (($_POST['password']) == ($_POST['password2']))  
                 {    
                  $login= htmlspecialchars($_POST["login"]);
                  $password= password_hash($_POST["password"], PASSWORD_DEFAULT,array('cost'=> 12));
                  $reqdoublon = "SELECT login FROM `utilisateurs` where login=\"$login\";";
                  $req=mysqli_query($connexion,$reqdoublon);                 
                  $retour=mysqli_num_rows($req);

                           if($retour==0)
                           {                            
                            $requete="INSERT INTO utilisateurs(login,password)
                            VALUES (\"$login\",\"$password\")";                
                            $inser= mysqli_query($connexion, $requete);
                             header("location: connexion.php");
                          } 
                          else
                          {
                            echo "ce login existe deja !";
                          }
               }
               else
               {
                echo "les passwords ne sont pas identiques !";
               }
    }
  else
  {
    echo "tous les champs doivent etre complétés !";
  }

}

?> 

 <table class="tablinscri">
          <tr>
            <td>
              <label  for="login"> login :</label>
        </td>
        <td>
              <input type="text" name="login" placeholder="ecrire votre pseudo" value="<?php if(isset($login)){echo $login;} ?>">
            </td>
          </tr>
          <tr>
              <td>
                
                <label  for="password">mot de passe :</label>
              </td>
              <td>
                <input type="password" name="password" placeholder="ecrire votre mot de passe">
              </td>
          </tr>
          <tr>
               <td>
                <label  for="password2">confirmer votre mot de passe :</label>
              </td>
              <td>
                <input type="password" name="password2" placeholder="ecrire votre mot de passe">
              </td>
          </tr>
          
        </table>
        <br/>
                <input  class="buton-inscription" type="submit" name="submit" value="s'inscrire"/>   
          </form>


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
 
</footer>
     </body>
     </html>

  <!--FIN NAV ADMIN-->