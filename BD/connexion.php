<?php 
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    try{
        $bdd = new PDO("mysql:host=$servername; dbname=simplon_register", $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
       
    }
    catch(PDOException $e){
        echo "Erreur : ". $e->getMessage();
    }

    $pdostat = $bdd->prepare('SELECT * FROM apprenant');
    $executeIsOk = $pdostat->execute();
    $det = $pdostat->fetchAll();
    
    
    
    

   if(isset($_POST['modify'])){
        $nomM = $_POST['nomM'];
        $prenomM = $_POST['prenomM'];
        $dateM = $_POST['dateM'];
        $villeM = $_POST['villeM'];
        $formM = $_POST['formM'];

    }

    if(isset($_POST['details'])){
        $idA = $_POST['ID'];
        $nomA = $_POST['nomM'];
        $prenomA = $_POST['prenomM'];
        $dateA = $_POST['dateM'];
        $villeA = $_POST['villeM'];
        $formA = $_POST['formM'];
    }





    if (isset($_POST['supp'])){
        $supdata = $_POST['nomS'];
        $reqSupp = $bdd->prepare('DELETE FROM apprenant WHERE ID_apprenant= '.$supdata);
        $executesupp = $reqSupp->execute();
        header('location: dashboard.php');
    }
    if(isset($_POST['logout'])){
        session_destroy();
        header('location: index2.php');
    }
?>