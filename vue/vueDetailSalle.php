<h1>Liste des postes dans la salle informatique</h1>
<a>Nom du responsable : <?= $detailSalleInfo[0]["responsable"] ?></a>
<?php

for ($i = 0; $i < count($detailSalleInfo); $i++) {

    ?>

    <div class="card">
        <a>Nom : <?= $detailSalleInfo[$i]["nomPoste"] ?></a>
        <br>
        <a>Ip : <?= $detailSalleInfo[$i]["indIP"] . "." . $detailSalleInfo[$i]["ad"] ?></a>
        <br>
    </div>
    <?php
}
?>


