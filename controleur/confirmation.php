<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.SalleInfo.php";

// recuperation des donnees GET, POST, et SESSION
$_SESSION['mail'] = $_POST['mail'];
$_SESSION['mdp'] = $_POST['mdp'];

$mail = $_SESSION['mail'];
$mdp = $_SESSION['mdp'];


// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$utilisateur = getUtilisateurByNom($mail, $mdp);

// traitement si necessaire des donnees recuperees
if (isset($_POST['mail']) && isset($_POST['mdp'])) {

    if ($utilisateur == $_POST['mail'] && $utilisateur == $_POST['mdp']) {

        $msg = '<a>Connection réussit</a>';
    }
    else {
        $msg = '<a>Erreur, impossible de se connecter</a>';
    }
}
else {
    $msg = '<a>Il faut remplir tout le formulaire</a>';
};

// appel du script de vue qui permet de gerer l'affichage des donnees
include "$racine/vue/entete.php";
include "$racine/vue/vueConnection.php";
include "$racine/vue/pied.php";

?>