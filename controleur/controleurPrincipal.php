<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "listeSalleInfo.php";
    $lesActions["liste"] = "listeSalleInfo.php";
    $lesActions["detail"] = "detailSalleInfo.php";
    $lesActions["connection"] = "connection.php";
    $lesActions["confirmation"] = "confirmation.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>