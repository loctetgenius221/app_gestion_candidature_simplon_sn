<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            height: 25px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ECEBEB;
            border-radius: 15px;
            background-color: #F3F2F2;
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
        .btn{
            margin-top: 15px;
        }
        .mandatory-fields{
            margin-left: 100px;
            font-size: 13px;
        }
        .padding{
            margin-left: 185px;
            font-size: 13px;
            color: #a00;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST" action="{{ route('login', ['role' => $role]) }}" class="form-group registration-form" enctype="multipart/form-data">
            @csrf
            <h2>Connexion</h2>
            <p class="mandatory-fields">Tous les champs sont obligatoires</p>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required autofocus placeholder="Saisir e-mail">
            
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required placeholder="Saisir mot de passe">

            <p class="padding">Mot de passe oublié ?</p>

            <button type="submit" class="btn">Se connecter</button>
            <p class="login-prompt">Vous n'avez pas de compte ? <a href="{{ route('register.form', ['role' => $role]) }}" class="btn btn-outline-secondary bouton">Créer mon compte</a></p>
        </form>
    </div>
</body>
</html>
