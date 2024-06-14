
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-image: url('background.png'); /* Background image */
    background-size: cover;
    background-position: center;
}

.container {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
    text-align: center;
}

.registration-form h2 {
    color: #c00;
}

.registration-form .mandatory-fields {
    color: #c00;
    margin-bottom: 15px;
}

.registration-form label {
    display: block;
    margin: 10px 0 5px;
    text-align: left;
}

.registration-form input {
    width: 90%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    background-color: #DADCDB;
    border: 1px #DBD7D7;
    border-radius: 4px;
}

.registration-form button {
    background-color: #c00;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
}

.registration-form button:hover {
    background-color: #a00;
}

.registration-form .login-prompt {
    margin-top: 15px;
}

.registration-form .login-prompt a {
    color: #007bff;
    text-decoration: none;
}

.registration-form .login-prompt a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <div class="container">
    <form method="POST" action="{{ route('personnel-register') }}" class="form-group  registration-form" enctype="multipart/form-data">
        @csrf
            <h2>Inscription</h2>
            <p class="mandatory-fields">Tous les champs sont obligatoires</p>
            <label for="prenom" class="form-label">Prenom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" required>
            
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" required>

        <label for="adresse" class="form-label">Adresse</label>
        <input type="text" class="form-control" id="adresse" name="adresse" required>

        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="e_mail" required>

        <label for="telephone" class="form-label">Téléphone</label>
        <input type="number" class="form-control" id="telephone" name="telephone" required>

        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image">

        <label for="mot_de_passe" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required>

        <label for="mot_de_passe_confirmation" class="form-label">Confirmation du mot de passe</label>
        <input type="password" class="form-control" id="mot_de_passe_confirmation" name="mot_de_passe_confirmation" required>

            <button type="submit">S'inscrire</button>
            <p class="login-prompt">Vous avez déjà un compte ?     <a href="login" class="btn btn-outline-secondary bouton">J'ai un compte, me connecter</a>
</p>
        </form>
    </div>
</body>
</html>
