    <h1>Liste des salle informatique</h1>

    <?php
    for ($i = 0; $i < count($listeSalleInfo); $i++) {
        $lesSalles = getSalleByNom($listeSalleInfo[$i]['nSalle']);
        ?>
        <div class="card">
        <div class="descrCard"><?php echo "<a href='./?action=detail&nSalle=" . $listeSalleInfo[$i]['nSalle'] . "'>" . $listeSalleInfo[$i]['nomSalle'] . "</a>"; ?>
        </div>
        <?php
    for ($e = 0; $e < count($lesSalles); $e++) {?><br>
        <?= $lesSalles[$e]["nomPoste"]; }?>
        </div>
        <br>
        <?php
    }
    ?>