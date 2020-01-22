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
     <link rel="stylesheet" type="text/css" href="css/connexion.css">


     <title>futsal club connexion</title>
</head>
       <body class="oc-body-accueil-btp">
  

					 <!--HEADER ADMIN -->
     <section class="section-deventure">      
  <header class="oc-header-btp">
  	<h1 class="titreh">Futsal club Arancioneri</h1>
    <h2>Connexion</h2>
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
       <!--FIN NAV
            DEBUT MAIN-->
<main>
<?php
  $connexion=mysqli_connect("localhost","root","","reservationsalles");

if (isset($_POST['envoiconnexion'])) {
  # code...


  if (!empty($_POST['login']) && !empty($_POST['password']))
   {
    $login=htmlspecialchars($_POST['login']);
    $password= password_hash($_POST["password"], PASSWORD_DEFAULT,array('cost'=> 12));

     $requete=("SELECT * FROM utilisateurs where login = '$login' ");
     var_dump($requete);
     $sql=mysqli_query($connexion,$requete);
     $retour=mysqli_fetch_array($sql);
   
      if (password_verify($_POST['password'], $retour['password']))
       {
        $_SESSION['login']=$_POST['login'];
        $_SESSION['password']=$_POST['password'];
        header("location: index.php");
      }
      else
      {
      echo "le mot de passe ou le login ne correspond pas !";
      }
   }
   else
   {
    echo "remplissez tous les champs !";
   }
   }
 //  elseif (!empty($_POST['login'] && empty($_POST['password'])) or !empty($_POST['password']) && empty($_POST['login'])) 
  // {
  // echo "remplissez tous les champ !";
  // }

   if (isset($_POST['envoideconnexion'])) 
   {
     unset($_SESSION['login']);
     unset($_SESSION['password']);
     echo "vous etez déconectez !";
   }
?>

  <form class="form-connexion" method="POST" action="connexion.php">
         <table>
           <tr>
            <td>
              <label class="login"  for="login">login :</label>
            </td>
            <td>
              <input class="login-connexion" type="text" name="login" ><!--php pour laisser le text dans l'input-->
            </td>
          </tr>
          <tr>
            <td>
              <label class="mdp"  for="password">mot de passe :</label>
            </td>
            <td>
              <input class="mdp" type="password" name="password" ><!--php pour laisser le text dans l'input-->
            </td>
          </tr>
        </table> 
        <br/>
                <input class="envoi-connexion" type="submit" name="envoiconnexion" value="connexion">
        <br/>
                <input class="envoi-deconnexion" type="submit" name="envoideconnexion" value="déconnexion">   

     </form>

</main>



<footer>
  <section class="oc-footer-navigation">
  <div class="oc-container">
   <h3 class="oc-menu">Menu</h3>
    <div class="oc-columns">
     <ul class="oc-nav2">
      <li ><a class="oc-lien" href="index.php">accueil</a></li><!--
  --> <li ><a class="oc-lien" href="connexion.php">planning</a></li>
   
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
