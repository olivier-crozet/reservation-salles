<?php
session_start();

$_SESSION['login'];
$log=$_SESSION['login'];
$id=$_SESSION['id'];


               //si on clique sur la connexion
 if (!empty($_POST['formdeconexion']) OR !empty($_POST['deconection'])) 
    {   	
    unset ( $_SESSION ['id'] );
    unset ($_SESSION['login']);	
    header("location: index.php");
$erreur="<p> class='codeerreur'>vous n'etes pas connecté</p> !";
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
                         echo "<li><a class=\"ah\"  href=\"reservation-form.php\">réservation</a></li>";
                         }
                         ?>
               <li><a class="ah"  href="planning.php">voir le planning</a>                        
                    
               <li><a class="ah"  href="mailto:olivier.crozet@gmail.com">contact</a></li>
                <?php
                    if  (isset($_SESSION['id'])) 
                      { 
                        echo '<li>'.'<form  method="POST" action="">'.'<input  class="deco" type="submit" name="deconection" value="se deconnecté">'.'</li>';
                        //echo  '<li>'.'<a class="ah"  href= "connexion.php">'."connection".'</a>'.'</li>';
                        }
                        
                      ?>

          </ul>

       </nav>
  <!--FIN NAV ADMIN-->

<main>
  <section>
<?php
   $connexion=mysqli_connect("localhost","root","","reservationsalles");
   //TITRE ET SOUS TITRE
//$selectlog="SELECT login FROM utilisateurs where login=$_SESSION['id']"
  $psedo=("SELECT login FROM utilisateurs where id='$id'");
  $reqpsedo = mysqli_query($connexion,$psedo);
  $retour=mysqli_fetch_array($reqpsedo);
echo "<h1 class='titre-modif-profil'>bonjour"." $retour[0]"."</h1>";
echo"<h1 class='tritre2'>"."vous pouvez modifier votre mot de passe et votre login !"."</h1>";
   //REQUETTE SELECTLOGIN BY ID
   $psedo=("SELECT login FROM utilisateurs where id='$id'");
  $reqpsedo = mysqli_query($connexion,$psedo);

   $retour=mysqli_fetch_array($reqpsedo);


   
          //TABLEAU FORM
?>
<form class="form" method="POST" action="">
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
                <label  for="newpassword2">confirmer votre mot de passe :</label>
              </td>
              <td>
                <input type="password" name="password2" placeholder="ecrire votre mot de passe">
              </td>
          </tr>
          
        </table>
        <br/>
                   <input  class="buton-inscription" type="submit" name="modif" value="modifier le profil !"/>
         
<?php
      if (!empty($_POST['modif']))
       {       
         $login = htmlspecialchars($_POST['login']) ;
         $requete=("SELECT * FROM utilisateurs  where login = '$login' ");
            $sql=mysqli_query($connexion,$requete);
            $user=mysqli_fetch_array($sql);

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
                            $requeteupdate ="UPDATE utilisateurs SET login= '$login',password='$password' WHERE id='$id'";                  
                            $inser= mysqli_query($connexion,$requeteupdate);
                             header("location: profil.php");
                            var_dump($requeteupdate);
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


               // $reqecolog = "SELECT  login FROM utilisateurs where id='".$_SESSION['id']."'";
//$reqlog = mysqli_query($connexion,$reqecolog);
//$loginid = mysqli_fetch_row($reqlog);


?>
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