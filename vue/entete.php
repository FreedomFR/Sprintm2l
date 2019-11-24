<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>


        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title><?php echo $titre ?></title>
        <style type="text/css">
            @import url("css/base.css");
            @import url("css/form.css");
            @import url("css/cgu.css");
            @import url("css/corps.css");
        </style>
        <link rel="stylesheet" href="css\bootstrap\css\bootstrap.css">
    </head>
    <body>
    <?php include_once "$racine/modele/bd.utilisateur.php";?>
    <?php include_once "$racine/modele/bd.utilisateur.php";?>

    <nav>
            
        <ul id="menuGeneral">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link" href="./?action=accueil">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./?action=listeSalleInfo">Liste des salle</a>
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
    <div id="corps">