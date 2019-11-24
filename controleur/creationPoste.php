<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.SalleInfo.php";
include_once "$racine/modele/bd.poste.php";

// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["nPoste"]) && isset($_POST["nomPoste"]) && isset($_POST["ad"])) {

    if ($_POST["nPoste"] != "" && $_POST["nomPoste"] != "" && $_POST["ad"] != "") {
        $nPoste = $_POST["nPoste"];
        $indIP = $_POST["indIP"];
        $typePoste = $_POST["typePoste"];
        $nSalle = $_POST["nSalle"];
        $nomPoste = $_POST["nomPoste"];
        $ad = $_POST["ad"];
        $nbLog = 0;

        // enregistrement des donnees
        $ret = addPoste($nPoste, $nomPoste, $ad, $indIP, $typePoste, $nSalle, $nbLog);
        if ($ret) {
            ?>
            <div class="alert alert-success" role="alert">Le poste a été ajouté</div>
            <?php
        } else {?>
            <div class="alert alert-warning" role="alert">Le poste a été ajouté</div>
        <?php
        }
    }
 else {
    ?>
    <div class="alert alert-warning" role="alert">Remplir tous les champs</div>
<?php
    }
}
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Ajout poste";
include "$racine/vue/entete.php";
include "$racine/vue/vueCreationPoste.php";
include "$racine/vue/pied.php";

?>