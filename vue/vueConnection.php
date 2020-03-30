<div class="bg-info">
<h1>Formulaire d'identification</h1>
</div>
<body>
<div class="card border-success mb-3">
    <div id="connexion">
        <fieldset>
            <form action="./?action=connection" method="post">
                <div class="form-group">
                    <label>Votre adresse mail</label>
                    <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Mail">
                </div>
                <div class="form-group">
                    <label>Votre mot de passe</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <input type="submit" value="Connexion" class="btn btn-primary">
            </form>
            <a href="./?action=inscription">Inscription</a>
            <br>
        </fieldset>
    </div>
</div>
</body>