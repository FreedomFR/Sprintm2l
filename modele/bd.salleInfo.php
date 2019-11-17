<?php
include_once "bd.inc.php";

function getSalle() {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from sallet2 group by nSalle");
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

function getSalleByIdR($idR) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from sallet2 where nomSalle=:nomSalle");
        $req->bindValue(':nomSalle', $idR, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getSalleByNom($Nom) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from sallet2 where nSalle=:nSalle");
        $req->bindValue(':nSalle', $Nom, PDO::PARAM_INT);
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

function getSalleInfo() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from sallet2 group by nSalle");
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