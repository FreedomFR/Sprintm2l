<div class="bg-info">
<h1>Liste des salles informatiques</h1>
</div>
<body>
<?php
for ($i = 0; $i < count($listeSalleInfo); $i++) {
    ?>
    <div class="card border-success mb-3" style="text-align: center;">
        <div class="card-header border-success">
            <h5><?php echo $listeSalleInfo[$i]['nomSalle']?></h5>
        </div>
        <div class="card-body">
            <p class="nav-link"><?php echo "<a href='./?action=detail&nSalle=" . $listeSalleInfo[$i]['nSalle'] . "'>" . "Voir détail" . "</a>";?></p>
        </div>
    </div>
    <?php
}
?>
</body>
