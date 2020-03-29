<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="./css/style.css" rel="stylesheet">
    <title><?php echo $titre ?></title>
</head>
<?php include_once "$racine/modele/bd.utilisateur.php";?>
<div class="container">
    <br>
    <div class="card-header bg-dark card border-dark mb-3">
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
            <?php if(isLoggedOn()){?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ajouter
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./?action=creer">Créer un poste</a>
                    <a class="dropdown-item" href="./?action=ajouterPosteSalle">Ajouter un poste dans une salle</a>
                </div>
                <?php } ?>
            </li>
            <li class="nav-item">
                <?php if(isLoggedOn()){?>
                    <a class="nav-link" href="./?action=profil">Utilisateur :<?= " ".$_SESSION['name'] ?> </a>
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