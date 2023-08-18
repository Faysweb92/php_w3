<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Bootstrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<!-- $&post 
$&get -->
<body>
   

    <div class="container mt-5" action="action.php">
        <h1 class="mb-4">Formulaire</h1>
        <form action="./action.php" method="post">
            <div class="mb-3">
                <label for="civilite" class="form-label">Civilité :</label>
                <select class="form-select" id="civilite" name="civilite" >
                    <option value="" disabled selected>Choisir...</option>
                    <option value="Mme">Mme</option>
                    <option value="Mlle">Mlle</option>
                    <option value="M.">M.</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" >
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" >
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" class="form-control" id="email" name="email" >
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Téléphone :</label>
                <input type="tel" class="form-control" id="telephone" name="telephone" >
            </div>
            <div class="mb-3">
                <label for="motDePasse" class="form-label">Mot de passe :</label>
                <input type="password" class="form-control" id="motDePasse" name="motDePasse" >
            </div>
            <div class="mb-3">
                <label class="form-label">Pays de naissance :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="pays1" name="pays" value="France">
                    <label class="form-check-label" for="pays1">France</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="pays2" name="pays" value="Espagne">
                    <label class="form-check-label" for="pays2">Espagne</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="pays3" name="pays" value="Allemagne">
                    <label class="form-check-label" for="pays3">Allemagne</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="dateNaissance" class="form-label">Date de naissance :</label>
                <input type="date" class="form-control" id="dateNaissance" name="dateNaissance" max="2005-12-31" >
            </div>
            <div class="mb-3">
                <label for="commentaire" class="form-label">Commentaire :</label>
                <textarea class="form-control" id="commentaire" name="commentaire" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>