<?php
include_once "bd.inc.php";
function getAllIP() {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from salle group by indIP");
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

function getIPSalle($nSalle) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from salle where nSalle = :nSalle group by indIP");

        $req->bindValue(':nSalle', $nSalle, PDO::PARAM_STR);
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

function getAllPoste() {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * FROM `poste` ORDER BY `poste`.`nPoste` ASC ");
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

function getAllPosteSansSalle() {
    $resultat = [];
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT
          *
        FROM
          poste p
        WHERE
          p.nPoste NOT IN(
        SELECT
          nPoste
        FROM
          salleposte
        )
        ORDER BY
          nPoste ASC");
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
        $req = $cnx->prepare("select * from types");
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

function addPoste($nPoste,$nomPoste) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("INSERT INTO `poste` (`nPoste`,`nomPoste`) values(:nPoste,:nomPoste)");
        $req->bindValue(':nPoste', $nPoste, PDO::PARAM_STR);
        $req->bindValue(':nomPoste', $nomPoste, PDO::PARAM_STR);

        $resultat = $req->execute();

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function addSallePoste($nPoste, $ad, $indIP, $typePoste, $nSalle) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("INSERT INTO  salleposte (ad, indIP, typePoste, nSalle, nPoste) value (:ad, :indIP, :typePoste, :nSalle, :nPoste)");
        $req->bindValue(':ad', $ad, PDO::PARAM_INT);
        $req->bindValue(':indIP', $indIP, PDO::PARAM_STR);
        $req->bindValue(':typePoste', $typePoste, PDO::PARAM_STR);
        $req->bindValue(':nSalle', $nSalle, PDO::PARAM_STR);
        $req->bindValue(':nPoste', $nPoste, PDO::PARAM_STR);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function modifPoste($nPoste, $ad, $indIP, $typePoste, $nSalle) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("update salleposte set ad = :ad, indIP  = :indIP, typePoste = :typePoste, nSalle = :nSalle where nPoste = :nPoste");
        $req->bindValue(':ad', $ad, PDO::PARAM_INT);
        $req->bindValue(':indIP', $indIP, PDO::PARAM_STR);
        $req->bindValue(':typePoste', $typePoste, PDO::PARAM_STR);
        $req->bindValue(':nSalle', $nSalle, PDO::PARAM_STR);
        $req->bindValue(':nPoste', $nPoste, PDO::PARAM_STR);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getNomPoste($nPoste){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select nomPoste from poste where nPoste = :nPoste");
        $req->bindValue(':nPoste', $nPoste, PDO::PARAM_STR);
        
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