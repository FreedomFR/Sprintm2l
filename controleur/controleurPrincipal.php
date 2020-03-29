<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "listeSalleInfo.php";
    $lesActions["liste"] = "listeSalleInfo.php";
    $lesActions["detail"] = "detailSalleInfo.php";
    $lesActions["connection"] = "connection.php";
    $lesActions["inscription"] = "Inscription.php";
    $lesActions["profil"] = "monProfil.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["creer"] = "creationPoste.php";
    $lesActions["modifier"] = "modifierPoste.php";
    $lesActions["ajouterPosteSalle"] = "ajouterPosteSalle.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    }
    else {
        return $lesActions["defaut"];
    }
}

?>