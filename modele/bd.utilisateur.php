<?php
include_once "bd.inc.php";

function getUtilisateurByNom($mail, $mdp) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from mrbs_users where email=:mail and password=:mdp");
        $req->bindValue(':mail', $mail, PDO::PARAM_STR);
        $req->bindValue(':mdp', $mdp, PDO::PARAM_STR);
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