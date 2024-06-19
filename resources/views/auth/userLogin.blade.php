

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Personnel</title>
</head>
<body>

</body>
</html>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Personnel</title>
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
        <div>
        </div>
        <div>
        </div>

    </form>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
<form method="POST" action="{{ route('login', ['role' => $role]) }}"  class="form-group  registration-form" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 text-start">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <!-- Bouton de connexion -->
                    <div class="d-flex justify-content-between mt-5">
                        <button type="submit" class="btn btn-primary me-2">Se connecter</button>
                        <a href="/" class="btn btn-danger mt-3">Retourner</a>
                        <a href="register" class="btn btn-outline-secondary bouton"> Pas des comptes, créer un</a>
                    </div><br>
                
                </form>
                <p class="login-prompt">Vous n'avez pas de compte ?     <a href="register" class="btn btn-outline-secondary bouton">Créer mon compte</a>
</p>

                </div>
</body>
</html>
                <h1>Login as {{ ucfirst($role) }}</h1>
   