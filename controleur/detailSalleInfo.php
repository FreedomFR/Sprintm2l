<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.SalleInfo.php";

// recuperation des donnees GET, POST, et SESSION
$Nom = $_GET["nSalle"];


// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$detailSalleInfo = getSalleByNom($Nom);

// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
include "$racine/vue/entete.php";
include "$racine/vue/vueDetailSalle.php";
include "$racine/vue/pied.php";

?>