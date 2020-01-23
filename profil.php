<?php
session_start();

$_SESSION['login'];
$log=$_SESSION['login'];

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

     <title>futsal club profil</title>
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
   //TITRE ET SOUS TITRE
echo "<h1 class='titre-modif-profil'>bonjour"." ".$log."</h1>";
echo"<h1 class='tritre2'>"."vous pouvez modifier votre mot de passe et votre login !"."</h1>";
   //REQUETTE SELECTLOGIN BY ID
   //$psedo=("SELECT 'login' FROM utilisateurs' where login='$id'");
  // $reqpsedo = mysqli_query($connexion,$psedo);

 //   $retour=mysqli_fetch_array($reqpsedo);
//var_dump($psedo);
?>

 <table class="tablinscri">
          <tr>
            <td>
              <label  for="login">modifier le login :</label>
        </td>
        <td>
              <input type="text" name="login" placeholder="ecrire votre pseudo" value="<?php if(isset($login)){echo $login;} ?>">
            </td>
          </tr>
          <tr>
              <td>
                
                <label  for="password">modifier le mot de passe :</label>
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
                <input  class="buton-inscription" type="submit" name="submit" value="modifier le profil !"/>   
          </form>
  </section>


</main>
  <!--FOOTER-->
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