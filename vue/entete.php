<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="../css/style.css" rel="stylesheet">
</head>
<?php include_once "$racine/modele/bd.utilisateur.php";?>
<div class="container">
    <div class="card-header card border-dark mb-3">
    <nav>
        <ul id="menuGeneral">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link" href="./?action=listeSalleInfo">Liste des salle</a>
            </li>
            <li class="nav-item">
                <?php if(isLoggedOn()){?>
                    <a class="nav-link" href="./?action=modifier">Modifier poste</a>   
                <?php } ?>
            </li>
            <li class="nav-item">
                <?php if(isLoggedOn()){?>
                    <a class="nav-link" href="./?action=creer">Ajouter un poste</a>   
                <?php } ?>
            <li class="nav-item">
                <?php if(isLoggedOn()){ $email = getMailULoggedOn(); $util = getUtilisateurByMailU($email);?>
                    <a class="nav-link" href="./?action=profil">Utilisateur :<?= " " .$util["name"] ?> </a>
                    
                <?php } 
                    else{ ?>
                        <a class="nav-link" href="./?action=connection">Connexion</a>
                <?php } ?>
            </li>
        </ul>
    </nav>
    </div>
</div>
    <div class="container">