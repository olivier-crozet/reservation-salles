<?php
session_start();
               //si on clique sur la connexion
$connexion = mysqli_connect("localhost","root","","reservationsalles");
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

                         
              <?php
                    if  (isset($_SESSION['id'])) 
                    	{ 
                    		echo  '<li>'.'<a class="ah"  href= "connexion.php">'."connection".'</a>'.'</li>';
                        }
                      ?>       
               <li><a class="ah"  href="mailinto:olivier.crozet@gmail.com">contact</a></li>
          </ul>

       </nav>
       <main>
        <header class="oc-header-btp">
          <h1>Insrivez-vous !<h1>
        </header>
<form  method="POST" action="" >
<?php


if (!empty($_POST["submit"])) 
{

  if (!empty($login) && !empty($password) && !empty($password2)) 
  {
    if (($_POST['password']) == ($_POST['password2']))  
    {
      
    
    $login= htmlspecialchars($_POST["login"]);
    $password= password_hash($_POST["password"], PASSWORD_DEFAULT,array('cost'=> 12));

    $reqdoublon = "SELECT `login` FROM `utilisateurs` where login=\"$login\";";
          
      $verifdoublon = mysqli_query($connexion, $reqdoublon);
      $result = mysqli_fetch_array($verifdoublon);
   }
   if ($result == $login)
    {
     # code...
   }
   else
    echo "les password ne sont pas identique !";
  }
  else
  {
    echo "tous les champ doivent etre compléter !";
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



       </main>
     </body>
     </html>

  <!--FIN NAV ADMIN-->