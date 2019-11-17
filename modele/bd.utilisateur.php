<?php
include_once "bd.inc.php";

function getUtilisateurByNom($email, $password) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from mrbs_users where email=:email and password=:password");
        $req->bindValue(':email', $email, PDO::PARAM_STR);
        $req->bindValue(':password', $password, PDO::PARAM_STR);
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
        
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
    return $resultat;
}

function login($email, $password) {
    if (!isset($_SESSION)) {
        session_start();
    }

    $util = getUtilisateurByMailU($email);
    $mdpBD = $util["password"];

    if (trim($mdpBD) == trim(crypt($password, $mdpBD))) {
        // le mot de passe est celui de l'utilisateur dans la base de donnees
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $mdpBD;
    }
}

function isLoggedOn() {
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;

    if (isset($_SESSION["email"])) {
        $util = getUtilisateurByMailU($_SESSION["email"]);
        if ($util["email"] == $_SESSION["email"] && $util["password"] == $_SESSION["password"]
        ) {
            $ret = true;
        }
    }
    return $ret;
}

    function getUtilisateurByMailU($email) {

        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from mrbs_users where email=:email");
            $req->bindValue(':email', $email, PDO::PARAM_STR);
            $req->execute();
            
            $resultat = $req->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }
?>