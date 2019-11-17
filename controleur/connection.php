<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.SalleInfo.php";
include_once "$racine/modele/bd.utilisateur.php";

// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["email"]) && isset($_POST["password"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
}
else
{
    $email="";
    $password="";
}


// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
login($email,$password);

// traitement si necessaire des donnees recuperees
if (isLoggedOn()){ // si l'utilisateur est connecté on redirige vers le controleur monProfil
    include "$racine/controleur/monProfil.php";
}
else{ // l'utilisateur n'est pas connecté, on affiche le formulaire de connexion
    // appel du script de vue 
    $titre = "Connection";
    include "$racine/vue/entete.php";
    include "$racine/vue/vueConnection.php";
    include "$racine/vue/pied.php";
}
?>