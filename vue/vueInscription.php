<div class="bg-info">
    <h1>Formulaire d'inscription</h1>
</div>
<body>
    <div class="card border-success mb-3">
        <div id="inscription">
            <fieldset>
                <form action="./?action=inscription" method="post">
                    <div class="form-group">
                        <label>Votre nom</label>
                        <input class="form-control" type="text" placeholder="Nom"  name="name">
                    </div>
                    <div class="form-group">
                        <label>Votre adresse mail</label>
                        <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Mail">
                    </div>
                    <div class="form-group">
                        <label>Votre mot de passe</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <input type="submit" value="Inscription" class="btn btn-primary">
                </form>
            </fieldset>
        </div>
    </div>
</body>