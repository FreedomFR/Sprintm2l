<h1>Liste des poste dans la salle informatique</h1>
<?php
for ($i = 0; $i < count($detailSalleInfo); $i++) {
    ?>     
    <div class="card">
            <a>Nom:</a>
            <?= $detailSalleInfo[$i]["nomPoste"] ?>
            <br>
            <a>Ip :</a>
            <?= $detailSalleInfo[$i]["indIP"] ?>
            <br>
            </div>
            <?php
            }
            ?>
            
        
