<div class="bg-info">
    <h1>Formulaire pour ajouter un poste dans une salle</h1>
</div>
<body>
<div class="card border-success mb-3">
    <div id="ajouterPoste">
        <fieldset>
            <?php $postes = getAllPosteSansSalle();?>
            <?php
            if(count($postes) !== 0){?>
                <form action="./?action=ajouterPosteSalle" method="post">

                    <a>Numéro poste  :</a>
                    <select name='nPoste'>
                        <?php
                        for ($e = 0; $e < count($postes); $e++) {
                            echo "<option value=" .$postes[$e]['nPoste'] . ">" .$postes[$e]['nomPoste'] . "</option>"; }
                        echo "</select>";?>
                        <br />
                        <br />

                    <a>Selectionner l'adresse IP :</a>
                    <?php $result = getAllIP();?>
                    <select name='indIP'>"
                        <?php
                        for ($e = 0; $e < count($result); $e++) {
                            echo "<option value=" .$result[$e]['indIP'] . ">" .$result[$e]['indIP'] . "</option>"; }
                        echo "</select>";?>
                        <a>.</a> <input type="int" name="ad">
                        <br />
                        <br />

                    <a>Selectionner le type :</a>
                    <?php $type = getTypePoste();?>
                    <select name='typePoste'>
                        <?php
                        for ($e = 0; $e < count($type); $e++) {
                            echo "<option value=" .$type[$e]['typeLP'] . ">" .$type[$e]['typeLP'] . "</option>"; }
                        echo "</select>";?>
                        <br />
                        <br />

                    <a>Selectionner la Salle :</a>
                    <?php $salle = getAllSalle();?>
                    <select name='nSalle'>
                        <?php
                        for ($e = 0; $e < count($salle); $e++) {
                            echo "<option value=" .$salle[$e]['nSalle'] . ">" .$salle[$e]['nomSalle'] . "</option>"; }
                        echo "</select>";?>
                        <br />
                        <br />
                    <input type="submit" name="valider" class="btn btn-primary" value="Enregistrer">
                </form>
            <?php } else {
                echo "Tous les postes ont une salle";
            } ?>
        </fieldset>
    </div>
</div>
</body>