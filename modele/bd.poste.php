<?php
include_once "bd.inc.php";
function getAllIP() {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from poste group by indIP");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getTypePoste() {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from poste group by typePoste");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getAllSalle() {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from salle group by nSalle");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function addPoste($nPoste, $nomPoste, $ad, $indIP, $typePoste, $nSalle, $nbLog) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("insert into poste (nPoste, nomPoste, ad, indIP, typePoste, nSalle, nbLog) values(:nPoste,:nomPoste,:ad,:indIP, :typePoste, :nSalle, :nbLog)");
        $req->bindValue(':nPoste', $nPoste, PDO::PARAM_STR);
        $req->bindValue(':nomPoste', $nomPoste, PDO::PARAM_STR);
        $req->bindValue(':ad', $ad, PDO::PARAM_INT);
        $req->bindValue(':indIP', $indIP, PDO::PARAM_STR);
        $req->bindValue(':typePoste', $typePoste, PDO::PARAM_STR);
        $req->bindValue(':nSalle', $nSalle, PDO::PARAM_STR);
        $req->bindValue(':nbLog', $nbLog, PDO::PARAM_STR);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getIPDispo($indIP) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select ad from sallea not in ");
        $req->bindValue(':indIP', $indIP, PDO::PARAM_STR);
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


?>