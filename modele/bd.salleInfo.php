<?php
include_once "bd.inc.php";

function getSalle() {

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

function getSalleByIdR($idR) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from salle where nomSalle=:nomSalle");
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
        $req = $cnx->prepare("SELECT
          *
        FROM
          salle s
        INNER JOIN
          salleposte sp ON s.nSalle = sp.nSalle
        INNER JOIN
          poste p ON sp.nPoste = p.nPoste
        WHERE
          sp.nSalle = :nSalle");
        $req->bindValue(':nSalle', $Nom, PDO::PARAM_STR);
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
        $req = $cnx->prepare("select * from salleb group by nSalle");
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

<!-- 
    CREATE VIEW sallea
AS
SELECT
    s.nSalle,
    s.nomSalle,
    s.nbPoste,
    p.indIP,
    p.nPoste,
    p.nomPoste,
    p.ad,
    p.typePoste,
    p.nbLog
FROM
    salle s
INNER JOIN poste p
    ON p.nSalle = s.nSalle



    CREATE VIEW sallepostevue AS SELECT s.nSalle, s.indIP, p.nPoste, p.nomPoste, s.ad, s.typePoste FROM salleposte s INNER JOIN poste p ON p.nPoste = s.nPoste
-->

<!--Data Source='DESKTOP-RA9J4K1';Initial Catalog=M2L;Integrated Security=true;-->