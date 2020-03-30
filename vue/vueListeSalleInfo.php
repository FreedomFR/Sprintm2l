<div class="bg-info">
<h1>Liste des salles informatiques</h1>
</div>
<body>
<div class="container" id="listeSalle">
    <?php
    for ($i = 0; $i < count($listeSalleInfo); $i++) {
        ?>
        <div class="card border-success mb-3" style="text-align: center;" id="listeSalleCard">
            <div class="card-header border-success">
                <h5><?php echo $listeSalleInfo[$i]['nomSalle']?></h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <img src="./image/salle.jpg" width="100%">
                    </div>
                    <div class="col-7">
                        <a> Nombre de poste : <?php
                            $nbPoste = getSalleByNom($listeSalleInfo[$i]['nSalle']);
                            if($nbPoste != null){
                                echo $nbPoste[0]['nbPoste'] ;
                            }else{
                                echo "0";
                            }
                           ?>
                        </a>
                        <p class="nav-link"><?php echo "<a href='./?action=detail&nSalle=" . $listeSalleInfo[$i]['nSalle'] . "'>" . "Voir détail" . "</a>";?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>

</body>
