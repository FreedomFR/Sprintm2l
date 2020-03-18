<h1>Formulaire de création de poste</h1>
    <body>
    <div class="card border-success mb-3">
        <fieldset>
            <br>
    <form action="./?action=creer" method="post">
    <a>Numéro poste  :</a> <input type="text" name="nPoste">
    <br />
    <a>Nom poste :</a> <input type="text" name="nomPoste">
    <br />
    <br />
    <a>Selectionner l'adresse IP :</a>
    <?php
    $result = getAllIP();?>
    <select name='indIP'>"
    <?php 
    for ($e = 0; $e < count($result); $e++) {   
        echo "<option value=" .$result[$e]['indIP'] . ">" .$result[$e]['indIP'] . "</option>"; }
        echo "</select>"; ?>
        <a>.</a> <input type="int" name="ad">
    <br />
    <br />
    <a>Selectionner le type :</a>
    <?php
    $type = getTypePoste();?>
    <select name='typePoste'>
    <?php  
    for ($e = 0; $e < count($type); $e++) {   
        echo "<option value=" .$type[$e]['typePoste'] . ">" .$type[$e]['typePoste'] . "</option>"; }
        echo "</select>"; ?>    
    <br />
    <br />
    <a>Selectionner la Salle :</a>
    <?php
    $salle = getAllSalle();?>
    <select name='nSalle'>
    <?php  
    for ($e = 0; $e < count($salle); $e++) {   
        echo "<option value=" .$salle[$e]['nSalle'] . ">" .$salle[$e]['nomSalle'] . "</option>"; }
        echo "</select>"; ?>
    <br />  
    <br />  
    <input type="submit" name="valider" value="Enregistrer">
    </form>
    </fieldset>
    </div>
    </body>
</html>