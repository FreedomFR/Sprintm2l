<div class="bg-info">
<h1>Mon profil</h1>
</div>
<div class="card border-success mb-3">
    <div id="connecte">
        Mon adresse électronique : <?= $_SESSION["email"] ?> <br />
        Mon pseudo : <?= $_SESSION["name"] ?> <br />
        <hr>
        <a href="./?action=deconnexion">se deconnecter</a>
    </div>
</div>
