<?php  
/* $req = $bdd->prepare('SELECT * FROM apprenant');
                        $req->execute();
                        while($ligne = $req->fetch(PDO::FETCH_OBJ))//On fait une boucle pour recuperer les resultats, le FETCH_OBJ peut etre considerer comme le array
                            {
                                $Nom = $ligne->nom;
                                $Prenom = $ligne->prenom;
                                $Nai = $ligne->date_naissance;
                                $Ville = $ligne->ville;
                                $Form = $ligne->formation;
                                <tr>
                                            <td><?php echo $Nom; ?></td>
                                            <td><?php echo $Prenom; ?></td>
                                            <td><?php echo $Nai; ?></td>
                                            <td><?php echo $Ville; ?></td>
                                            <td><?php echo $Form; ?></td>
                                        </tr>
                    
                            }*/
    require_once('BD/connexion.php');
    require_once('BD/login.php');
    require_once('BD/regist_apprenant.php');
    
    
    
    
                    

     
        
   

    
   

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <title>enregistrement</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <img class="logo1" src="images/logo.png" alt="logo">
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="form-group recher mt-4 d-flex">
                    <input type="search" class="form-control w-75" name="bsearch" placeholder="rechercher un apprenant">
                    <input type="submit" class="btn btn-danger text-white droitrecher" value="Rechercher">
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3 bout">
                <div class="zone_menu bg-danger">
                    <h3 class="text-white text-center">Menu</h3>
                   <div onclick="frontend();" class="btn btn-primary d-block mt-5" >Enregistrer</div>
                    <div onclick="backend();" class="btn btn-primary d-block mt-4"  >Lister</div>
                   <!--  <div onclick="frontend();"  >Enregistrer</div>
                    <div onclick="backend();"  >lister</div> -->
                    <form action="" method="post">
                    <input type="submit" class="btn btn-danger mt-4 w-100" name="logout" value="Deconnexion">
                    </form>
                </div>

                
                
            </div>
            <div class="col-lg-8 droite">
                <h1 class="text-start text2">Simplon_<span class="reg">register</span></h1>
                <div class="groupform">
                <form class="mt-4 bal" id="regist" method="post">
                    <div class="form-group" >
                        
                        <input type="text" id="nom" class="form-control w-50  mt-3" placeholder="Entrer le nom de l'apprenant" name="nom">
                        
                        <input type="text" id="pre" class="form-control w-50 mt-3" placeholder="Entrer le prenom de l'apprenant" name="prenom">
                        
                        <input type="date" class="form-control w-50 mt-3" placeholder="Date de naissance: jj/mm/yy" name="naissance">
                        <input type="text" id="pre" class="form-control w-50 mt-3" placeholder="Ville" name="ville">
                        
                        <select name="format" id="" class="mt-3">
                            <optgroup label="choix de formation">
                                <option value="choix">-- choisir une formation --</option>
                                <option value="webdev">Web developper</option>
                                <option value="refdig">Referent digital</option>
                            </optgroup>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-danger" value="enregistrer" name="sub">
                    
                </form>
                <div class="afficher" id="list">
                    <h1>Liste des apprenants</h1>
                    
                    <table class="table table-striped" id="tab">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($det as $det): ?>
                           
                            
                                    <tr>
                                    <td>
                                        <?= $det['nom'] ?>
                                    </td>
                                    <td>
                                    <?= $det['prenom'] ?>
                                    </td>
                                    <form action="" method="post">
                                    <td>
                                        <input type="hidden" name="ID" value="<?= $det['ID_apprenant'] ?>">
                                        <input type="hidden" name="nomM" value="<?= $det['nom'] ?>">
                                        <input type="hidden" name="prenomM" value="<?= $det['prenom'] ?>">
                                        <input type="hidden" name="dateM" value="<?= $det['date_naissance'] ?>">
                                        <input type="hidden" name="villeM" value="<?= $det['ville'] ?>">
                                        <input type="hidden" name="formM" value="<?= $det['formation'] ?>">
                                        <input type="submit" class="btn btn-primary" value="Details" name="details">
                                    </td>
                                    <td>
                                        
                                        <input type="hidden" name="ID" value="<?= $det['ID_apprenant'] ?>">
                                        <input type="hidden" name="nomM" value="<?= $det['nom'] ?>">
                                        <input type="hidden" name="prenomM" value="<?= $det['prenom'] ?>">
                                        <input type="hidden" name="dateM" value="<?= $det['date_naissance'] ?>">
                                        <input type="hidden" name="villeM" value="<?= $det['ville'] ?>">
                                        <input type="hidden" name="formM" value="<?= $det['formation'] ?>">
                                        <input type="submit" onclick="modif();" class="btn btn-warning" value="Modifier" name="modify">
                                       
                                    </td>
                                    <td>
                                        <input type="hidden" name="nomS" value="<?= $det['ID_apprenant'] ?>">
                                        <input type="submit" class="btn btn-danger" value="Supprimer" name="supp">
                                    </td>
                                    </form>
                                    </tr>
                                <?php endforeach; ?>
                        </tbody>
                    </table>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <input type="submit" onclick="modShow();" class="btn btn-warning w-50 mb-5" value="Modifier l'element">
                                
                                <form class="mt-4 bal" id="mod" method="post">
                                    <div class="form-group" >
                                        
                                        <input type="text" id="nom" class="form-control w-50  mt-3" value="<?php echo $_POST['nomM'] ?>" name="nom">
                                        
                                        <input type="text" id="pre" class="form-control w-50 mt-3" name="prenom" value="<?php echo $_POST['prenomM'] ?>">
                                        
                                        <input type="date" class="form-control w-50 mt-3" value="<?php echo $_POST['dateM'] ?>" name="naissance">
                                        <input type="text" id="pre" class="form-control w-50 mt-3" value="<?php echo $_POST['villeM'] ?>" name="ville">
                                        
                                        <select name="format" id="" class="mt-3">
                                            <optgroup label="choix de formation">
                                                <option value="choix"><?php echo $_POST['formM'] ?></option>
                                                <option value="webdev">Web developper</option>
                                                <option value="refdig">Referent digital</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <input type="submit" class="btn btn-danger" value="enregistrer" name="sub">
                    
                                </form>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                            <input type="submit" onclick="detailsShow();" class="btn btn-primary w-50 mb-5" value="Afficher l'element">

                            <table class="table w-75" id="infor">
                                <tr>
                                    <td><h5 class="font-weight-bold">ID :</h5></td>
                                    <td><h5><?php echo $idA; ?></h5></td>
                                </tr>
                                <tr>
                                    <td><h5 class="font-weight-bold">Nom :</h5></td>
                                    <td><h5><?php echo $nomA; ?></h5></td>
                                </tr>
                                <tr>
                                    <td><h5 class="font-weight-bold">Prenom :</h5></td>
                                    <td><h5><?php echo $prenomA; ?></h5></td>
                                </tr>
                                <tr>
                                    <td><h5 class="font-weight-bold">Date naissance :</h5></td>
                                    <td><h5><?php echo $dateA; ?></h5></td>
                                </tr>
                                <tr>
                                    <td><h5 class="font-weight-bold">Ville :</h5></td>
                                    <td><h5><?php echo $villeA; ?></h5></td>
                                </tr>
                                <tr>
                                    <td><h5 class="font-weight-bold">Formation :</h5></td>
                                    <td><h5><?php echo $formA; ?></h5></td>
                                </tr>
                            </table>
                            </div>
                        </div>
                    </div>
                    

                    

                    
                    
                </div>
                
                </div>
            </div>
        </div>

    </div>


    <script>
        let  call = document.getElementById("regist");
        let back = document.getElementById("list");
        let modify = document.getElementById("mod");
        let liste = document.getElementById("tab");
        let details = document.getElementById("infor");

        modify.style.display = "none";
        call.style.display = "block";
        details.style.display = "none";


        function backend(){
            if(call.style.display =="block"){
                call.style.display = "none";
                back.style.display = "block";
            }
        }

        function frontend(){
            if(back.style.display =="block"){
                back.style.display = "none";
                call.style.display = "block";
            }
        }
        function modShow(){
            if(modify.style.display == "none"){
                modify.style.display = "block";
            }else{
                modify.style.display = "none"
            }
        }

        function detailsShow(){
            if(details.style.display == "none"){
                details.style.display = "block";
            }else{
                details.style.display = "none";
            }
        }
        

    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">    </script> 
   
  </body>
</html>