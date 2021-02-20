<?php 
  require_once("connexion.php");
  
  
    if (isset($_POST['submit2'])){
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email2']);
        $mdp = sha1($_POST['mdp1']);
        $mdp2 = sha1($_POST['mdp2']);

        if(!empty($_POST['nnom']) && !empty($_POST['prenom']) && !empty($_POST['email2']) && !empty($_POST['mdp1']) && !empty($_POST['mdp2'])){
            $nomlenght = strlen($nom);
            $prenomlenght = strlen($prenom);

            if($nomlenght <= 255 || $prenomlenght <= 255){
                if(filter_var($email2, FILTER_VALIDATE_EMAIL)){
                    $reqmail = $bdd->prepare("SELECT * FROM administration WHERE email = ?");
                    $reqmail->execute(array($email2));
                    $mailexist = $reqmail->rowCount();

                    if($mailexist == 0){
                        if($mdp == $mdp2){
                            $insertmdp = $bdd->prepare("INSERT INTO administration(nom, prenom, email, mdp) VALUES(?, ?, ?)");
                            $insertmdp->execute(array($nom, $prenom, $email, $mdp));
                            $erreur = "Votre compte a ete cree avec succes";
                        }
                    }
                    else{
                        $erreur = "L'adresse mail est deja utilise";
                    }
                }
                else{
                    $erreur = "Votre email n'est pas valide";
                }
            }
            else{
                $erreur = "votre nom ou prenom ne doit pas depasser 255 caracteres";
            }
        }
        else{
            $erreur = "tout les champs doivent etre remplient";
        }
    }

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
    
    

    <title>Bienvenue sur simplon register</title>
  </head>
  <body class="cor">
    <div class="container-fluid">
        
      <div class="row">
        <div class="col-lg-4 col-sm-12">
            <img class="logo1" src="images/logo.png" alt="logo">
        </div>
        
      </div>
      <div class="row mt-5">
        <div class="col-lg-8 col-sm-12">
          <h1 class="text-center text1">Bienvenue sur</h1>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-12 col-sm-12">
          <h1 class="text-center text2">Simplon_<span class="reg">register</span></h1>
        </div>
        
      </div>
      <div class="row mt-5">
        <div class="col-lg-12 col-sm-12">
          <button type="button" class="btn btn-danger mx-auto d-block" data-toggle="modal" data-target="#formule">Indentifiez-vous</button>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-12 col-sm-12">
          <button type="button" class="btn btn-danger mx-auto d-block" data-toggle="modal" data-target="#inscrit">Inscription</button>
        </div>
      </div>
    </div>
    <!--Models-->
    <div id="formule" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-danger">
            <h2 class="modal-title font-weight-bold d-block mx-auto text-white">Connexion</h2>
            <button class="close" data-dismiss="modal">
              <span arial-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="email1">Email</label>
              <input type="email" class="form-control" id="email1" name="email">
              <label for="pass1">Mot de passe</label>
              <input type="password" class="form-control" id="pass1" name="mdp">
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-danger" name="submit" value="envoyer">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="inscrit" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-danger">
            <h2 class="modal-title font-weight-bold d-block mx-auto text-white">Inscription</h2>
            <button class="close" data-dismiss="modal">
              <span arial-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

          

            <div class="form-group">
              <form action="index.php">
              <label for="nom1">Nom</label>
              <input type="text" class="form-control" id="nom1" name="nom">
              <label for="pre1">Prenom</label>
              <input type="text" class="form-control" id="pre1" name="prenom">
              <label for="email2">Email</label>
              <input type="email" class="form-control" id="email2" name="email2">
              <label for="pass2">Mot de passe</label>
              <input type="password" class="form-control" id="pass2" name="mdp1">
              <label for="confpass">Confirmation mot de passe</label>
              <input type="password" class="form-control" id="confpass" name="mdp2">
              </form>
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-danger" name="submit2" value="envoyer">
              <?php if(isset($erreur)){
                echo '<h1 class="bg-danger text-white" >'.$erreur.'</h1>';
              } ?>
            </div>
          </div>
        </div>
      </div>
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