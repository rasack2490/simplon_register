<?php 
    if(isset($_POST['sub'])){
        
        $nomap = htmlspecialchars($_POST['nom']);
        $prenomap = htmlspecialchars($_POST['prenom']);
        $birthday = $_POST['naissance'];
        $villeap = htmlspecialchars($_POST['ville']);
        $formation = $_POST['format'];

        if($nomap !="" && $prenomap !="" && $birthday !="" && $villeap !="" && $formation !=""){
            $insertData = $bdd->prepare("INSERT INTO apprenant(nom, prenom, date_naissance, ville, formation) VALUE(?, ?, ?, ?, ?)");
            if($insertData){
                $insertData->execute(array($nomap, $prenomap, $birthday, $villeap, $formation));
                $error = "apprenant enregistrer avec success";
                header("location: dashboard.php");
            }else{
                $error = "quelque chose c'est mal passe";
            }


        }
        else{
            $error = "vous devez remplir tous les champs";
        }

    }
?>