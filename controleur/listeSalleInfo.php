<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.SalleInfo.php";

// recuperation des donnees GET, POST, et SESSION

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeSalleInfo = getSalle();

// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "liste salle";
include "$racine/vue/entete.php";
include "$racine/vue/vueListeSalleInfo.php";
include "$racine/vue/pied.php";

?>