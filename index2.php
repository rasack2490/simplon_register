
<?php 
  require_once('BD/connexion.php');
  require_once('BD/login.php');
  require_once('BD/register.php');
  $erreur= "";
  $erreurlog= "";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" media="screen">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    


    
    

    <title>Bienvenue sur simplon register</title>
  </head>
  <body class="cor">
    <div class="container-fluid">
        
      <div class="row">
          <div class="col-lg-4 col-sm-12">
              <img class="logo1" src="images/logo.png" alt="logo">
          </div>
      </div>

       

        
        <form method="post" class="form">
          <div class="tab-tete">
            <div class="active">Connexion</div>
            <div>Inscription</div>
          </div>
          <div class="tab-contenu">
            <div class="tab-corp active">
             
              <div class="form-element">
                <input type="email" class="form-control" placeholder="Email" name="emailCon">
              </div>
              <div class="form-element">
                <input type="password" class="form-control" placeholder="Mot de passe" name="mdpCon">
              </div>
              <div class="form-element">
              <input type="submit" name="sendCon" value="Connexion" class="button">
              </div>
              <?php $style = "bg-danger";  echo "<h1 class=".$style.">".$erreurlog."</h1>";  ?>
            </div>

            <div class="tab-corp">
              <div class="form-element">
                <input type="text" class="form-control" placeholder="Nom" name="lastName">
              </div>
              <div class="form-element">
                <input type="text" class="form-control" placeholder="Prenom" name="firstName">
              </div>
              <div class="form-element">
                <input type="email" class="form-control" placeholder="Email" name="email">
              </div>
              <div class="form-element">
                <input type="password" class="form-control" placeholder="Mot de passe" name="mdp">
              </div>
              <div class="form-element">
                <input type="password" class="form-control" placeholder="Confirmation de mot de passe" name="mdp1">
              </div>
              <div class="form-element">
                
                <input type="submit" name="send" value="Inscrire" class="button">
                
              </div>
                
               <?php $style = "bg-danger";  echo "<h1 class=".$style.">".$erreur."</h1>";  ?>
            </div>
          </div>
        

          
        </form>
    </div>
   
    


    <!-- Optional JavaScript; choose one of the two! -->
 
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
    <script src="js/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

  </body>
</html>