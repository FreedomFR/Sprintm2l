<div class="bg-info">
<h1>Liste des postes dans la salle informatique</h1>
</div>
<!--<a>Nom du responsable : <?/*= $detailSalleInfo[0]["responsable"] */?></a>-->
<div id="listeSalle">
    <?php
    for ($i = 0; $i < count($detailSalleInfo); $i++) {?>
        <div class="card border-success mb-3" id="listeSallePoste">
            <div id="listeSallePoste">
                <div class="row">
                    <div class="col">
                        <img src="./image/pc.jpg" width="100%">
                    </div>
                    <div class="col-11">
                       <a>Nom : <?= $detailSalleInfo[$i]["nomPoste"] ?></a>
                        <br>
                        <a>Ip : <?= $detailSalleInfo[$i]["indIP"] . "." . $detailSalleInfo[$i]["ad"] ?></a>
                        <br>
                        <a>Type : <?= $detailSalleInfo[$i]["typePoste"] ?></a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>



