<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        <form method="POST" action="{{ route('register', ['role' => $role]) }}" class="form-group registration-form" enctype="multipart/form-data">
            @csrf
            <h2>Inscription</h2>
            <p class="mandatory-fields">Tous les champs sont obligatoires</p>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <label for="password_confirmation">Confirmation du mot de passe :</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>

            @if($role == 'user')
            <label for="date_de_naissance">Date de naissance :</label>
            <input type="date" id="date_de_naissance" name="date_de_naissance" required>

            <label for="lieu_de_naissance">Lieu de naissance :</label>
            <input type="text" id="lieu_de_naissance" name="lieu_de_naissance" required>

            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" required>

            <label for="telephone">Téléphone :</label>
            <input type="text" id="telephone" name="telephone" required>

            <label for="image">URL de l'image :</label>
            <input type="text" id="image" name="image">

            <label for="cv">URL du CV :</label>
            <input type="text" id="cv" name="cv">
            @elseif($role == 'admin')
            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" required>

            <label for="telephone">Téléphone :</label>
            <input type="text" id="telephone" name="telephone" required>

            <label for="image">URL de l'image :</label>
            <input type="text" id="image" name="image">
            @elseif($role == 'super_admin')
            <label for="image">URL de l'image :</label>
            <input type="text" id="image" name="image">
            @endif

            <button type="submit">S'inscrire</button>
            <p class="login-prompt">Vous avez déjà un compte ? <a href="{{ route('login.form', ['role' => $role]) }}" class="btn btn-outline-secondary bouton">J'ai un compte, me connecter</a></p>
        </form>
    </div>
</body>
</html>
