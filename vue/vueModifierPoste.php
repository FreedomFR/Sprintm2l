<div class="bg-info">
    <h1>Formulaire modification poste</h1>
</div>
<body>
<div class="card border-success mb-3">
    <div id="modifier">
        <fieldset>
            <br>
            <form action="./?action=modifier" method="post">
                <a>Selectionner le poste :</a>
                <?php $result = getAllPoste(); ?>
                <select name='nPoste'>"
                    <?php
                        for ($e = 0; $e < count($result); $e++) {
                            echo "<option value=" .$result[$e]['nPoste'] . ">" .$result[$e]['nomPoste'] . "</option>"; }
                        echo "</select>";
                    ?>
                    <br />
                    <br />
                <a>Selectionner l'adresse IP :</a>
                <?php $result = getAllIP(); ?>
                <select name='indIP'>"
                    <?php
                        for ($e = 0; $e < count($result); $e++) {
                            echo "<option value=" .$result[$e]['indIP'] . ">" .$result[$e]['indIP'] . "</option>"; }
                        echo "</select>";
                    ?>
                    <a>.</a> <input type="int" name="ad">
                    <br />
                    <br />
                <a>Selectionner le type :</a>
                <?php $type = getTypePoste(); ?>
                <select name='typePoste'>
                    <?php
                        for ($e = 0; $e < count($type); $e++) {
                            echo "<option value=" .$type[$e]['typeLP'] . ">" .$type[$e]['typeLP'] . "</option>"; }
                        echo "</select>";
                    ?>
                    <br />
                    <br />
                <a>Selectionner la Salle :</a>
                <?php $salle = getAllSalle(); ?>
                <select name='nSalle'>
                    <?php
                        for ($e = 0; $e < count($salle); $e++) {
                            echo "<option value=" .$salle[$e]['nSalle'] . ">" .$salle[$e]['nomSalle'] . "</option>"; }
                        echo "</select>";
                    ?>
                    <br />
                    <br />
                <input type="submit" name="modifier" class="btn btn-primary" value="Enregistrer">
            </form>
        </fieldset>
    </div>

</div>
</body>