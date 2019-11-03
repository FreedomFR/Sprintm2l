<h1>Liste des poste dans la salle informatique</h1>
<?php
for ($i = 0; $i < count($detailSalleInfo); $i++) {
    ?>     
    <div class="card">
            <a>Nom : <?= $detailSalleInfo[$i]["nomPoste"] ?></a>
            <br>
            <a>Ip : <?= $detailSalleInfo[$i]["indIP"] ?></a>
            <br>
            </div>
            <?php
            }
            ?>
            
        
