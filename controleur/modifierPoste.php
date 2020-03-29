<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.poste.php";

// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["nPoste"]) && isset($_POST["ad"])) {

    if ($_POST["ad"] != "") {
        $nPoste = $_POST["nPoste"];
        $indIP = $_POST["indIP"];
        $typePoste = $_POST["typePoste"];
        $nSalle = $_POST["nSalle"];
        $ad = $_POST["ad"];
        $nbLog = 0;

        // enregistrement des donnees
       /* $nomPosteBDD = getNomPoste($nPoste);*/
        $ret = modifPoste($nPoste, $ad, $indIP, $typePoste, $nSalle);
        if ($ret) {
            ?>
            <div class="alert alert-success" role="alert">Le poste a été modifier</div>
            <?php
        } else {?>
            <div class="alert alert-warning" role="alert">Le poste n'a pas été modifier</div>
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
$titre = "Modifier poste";
include "$racine/vue/entete.php";
include "$racine/vue/vueModifierPoste.php";
include "$racine/vue/pied.php";

?>