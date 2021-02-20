<?php 









    if(isset($_POST['send'])){
        $lastName = htmlspecialchars($_POST['lastName']);
        $firstName = htmlspecialchars($_POST['firstName']);
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['mdp']);
        $mdp_conf =sha1( $_POST['mdp1']);
    
        if($lastName !="" && $firstName !="" && $email !="" && $mdp !="" && $mdp_conf !=""){
          $lastNameLenght = strlen($lastName);
          $firstNameLenght = strlen($firstName);
    
          if($lastNameLenght<= 20 && $firstNameLenght <=20){
            
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
              
              //verification du email dans la base donnee
              $reqmail = $bdd->prepare("SELECT * FROM administration WHERE email=?");
              $reqmail->execute(array($email));
              $mailExist = $reqmail->rowCount();
    
              if($mailExist == 0){
                //verification de mot de passe
                if($mdp == $mdp_conf){
                  //preparation d'enregistrement de donnees
                  $insertData = $bdd->prepare("INSERT INTO administration(nom, prenom, email, mdp ) VALUES(?, ?, ?, ?) ");
                  $insertData->execute(array($lastName, $firstName, $email, $mdp));
                  header("Location: index2.php");
                }
                else{
                  $erreur = "Mot de passe incorrect";
                }
              }
              else{
                $erreur = "l'email est deja utilise";
              }
    
    
            }
            else{
              $erreur = "Le mot de passe entrer n'est pas valide";
            }
          }
          else{
            $erreur = "Votre nom ou prenom depasse la taille exiger";
          }
        }
        else{
          $erreur = "tout les champs doivent etre remplis";
        }
      }
?>