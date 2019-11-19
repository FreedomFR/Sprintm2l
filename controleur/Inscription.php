<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.utilisateur.php";

// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url"=>"./?action=connexion","label"=>"Connexion");
$menuBurger[] = Array("url"=>"./?action=inscription","label"=>"Inscription");


$inscrit = false;
$msg="";
// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["name"])) {

    if ($_POST["email"] != "" && $_POST["password"] != "" && $_POST["name"] != "") {
        $mailU = $_POST["email"];
        $mdpU = $_POST["password"];
        $pseudoU = $_POST["name"];

        // enregistrement des donnees
        $ret = addUtilisateur($mailU, $mdpU, $pseudoU);
        if ($ret) {
            $inscrit = true;
        } else {
            $msg = "l'utilisateur n'a pas été enregistré.";
        }
    }
 else {
    $msg="Renseigner tous les champs...";    
    }
}

if ($inscrit) {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Inscription confirmée";
    include "$racine/vue/entete.php";
    include "$racine/vue/vueConfirmation.php";
    include "$racine/vue/pied.php";
} else {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Inscription pb";
    include "$racine/vue/entete.php";
    include "$racine/vue/vueInscription.php";
    include "$racine/vue/pied.php";
}
?>