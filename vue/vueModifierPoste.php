<html>
    <head>
    <h1>Formulaire modification poste</h1>
    </head>

    <body>
    <fieldset>
    <form action="./?action=modifier" method="post">
    <a>Selectionner le poste :</a>
    <?php
    $result = getAllPoste();?>
    <select name='indIP'>"
    <?php 
    for ($e = 0; $e < count($result); $e++) {   
        echo "<option value=" .$result[$e]['nPoste'] . ">" .$result[$e]['nomPoste'] . "</option>"; }
        echo "</select>"; ?>
        <a>
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
    </body>
</html>