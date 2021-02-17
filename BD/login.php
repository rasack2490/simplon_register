<?php  
    //initialisation de la session
    session_start();

    //verification d'une session deja ouverte
    /*if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        $cookie_name = "user";
        $cookie_value = $userLastName;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        header("location: dashboard.php");
        exit;
    }*/

    if(isset($_POST['sendCon'])){
        $usermail = filter_var($_POST['emailCon'], FILTER_VALIDATE_EMAIL);
        $pass = sha1($_POST['mdpCon']);

        if($usermail !="" && $pass !=""){
            //preparation de la requete pour la verification du Email
            $reqmail = $bdd->prepare("SELECT * FROM administration WHERE email=?");
            $reqmail->execute(array($usermail));
            $mailExist = $reqmail->rowCount();

            if($mailExist == 1){
                //preparation de la requete pour la verification du mot de passe
                $reqpass = $bdd->prepare("SELECT * FROM administration WHERE mdp = ?");
                $reqpass->execute(array($pass));
                $passExist = $reqpass->rowCount();
                
                if($passExist == 1){
                    
                    header("Location: dashboard.php");
                    
                    
                    /*$row = $reqmail->fetch();
                    var_dump($row['ID_admin']);
                    $userFirstName = $row["prenom"];
                    $userLastName = $row["nom"];
                    header("location: dashboard.php");*/
                }
                else{
                    
                    $erreurlog = "le mot de passe est incorrect";
                }
            }
            else{
                $erreurlog = "Votre email n'est pas enregistrer";
            }
        }
        else{
            $erreurlog = "vous devez renseigner tout les champs";
        }

            
    }

?>