<form method="POST" action="{{ route('candidat-register') }}" class="form-group" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 text-start">
        <label for="prenom" class="form-label">Prenom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" required>
    </div>
    <div class="mb-3 text-start">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" required>
    </div>
    <div class="mb-3 text-start">
        <label for="date_de_naissance" class="form-label">Date de naissance</label>
        <input type="date" class="form-control" id="date_de_naissance" name="date_de_naissance" required>
    </div>
    <div class="mb-3 text-start">
        <label for="lieu_de_naissance" class="form-label">Lieu de naissance</label>
        <input type="text" class="form-control" id="lieu_de_naissance" name="lieu_de_naissance" required>
    </div>
    <div class="mb-3 text-start">
        <label for="adresse" class="form-label">Adresse</label>
        <input type="text" class="form-control" id="adresse" name="adresse" required>
    </div>
    <div class="mb-3 text-start">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3 text-start">
        <label for="telephone" class="form-label">Téléphone</label>
        <input type="number" class="form-control" id="telephone" name="telephone" required>
    </div>
    <div class="mb-3 text-start">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image" required>
    </div>
    <div class="mb-3 text-start">
        <label for="cv" class="form-label">CV</label>
        <input type="file" class="form-control" id="cv" name="cv" required>
    </div>
    <div class="mb-3 text-start">
        <label for="mot_de_passe" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required>
    </div>
    <div class="mb-3 text-start">
        <label for="mot_de_passe_confirmation" class="form-label">Confirmation du mot de passe</label>
        <input type="password" class="form-control" id="mot_de_passe_confirmation" name="mot_de_passe_confirmation" required>
    </div>
    <div class="d-flex justify-content-between mt-5">
        <button type="submit" class="btn btn-primary me-2">Enregistrer</button>
        <a href="/" class="btn btn-danger mt-3">Retourner</a>
    </div>
    <a href="login" class="btn btn-outline-secondary bouton">J'ai un compte, me connecter</a>
</form>
