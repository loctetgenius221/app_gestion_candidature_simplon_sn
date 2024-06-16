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
    /* display: flex; */
    justify-content: center;
    /* align-items: center; */
    height: 100vh;
    margin: 0;
    background-image: url('background.png'); /* Background image */
    background-size: cover;
    background-position: center;
}

.container{
    display: flex;
    align-items: center;
    justify-content: space-around;
    margin-top: 40px;
}

.formulaire {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
    text-align: center;
    height: 480px; 

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

.logo{
width: 756px;
height: 330px;
flex-shrink: 0;
background: url("{{ asset('images/logo-simplonSenegal-1-e1647016201426-removebg-preview 1.png') }}") 50% / cover no-repeat;

}
.container-logo-nav-bar{
    display: flex;
    align-items: center;
    justify-content: space-around; 
    margin-top: 15px;
}
.logo-nav-bar{
    width: 71px;
height: 26px;
flex-shrink: 0;
background: url("{{ asset('images/logo-simplonSenegal-1-e1647016201426-removebg-preview 1.png') }}") 50% / cover no-repeat;

}
.container-try-nav-logo{
    display:flex;
    justify-content: space-between;
    align-items: center;
}
.try-nav-logo{
    width: 13px;
height: 12.974px;
flex-shrink: 0;
}
.case-form{
    width: 82px;
height: 81.833px;
flex-shrink: 0;
position: relative;
top:-60px;
left: 370px;
z-index: -1;
}

.case-form1{
    width: 82px;
height: 81.833px;
flex-shrink: 0;
position: relative;
top:-15px;
left: -60px;
z-index: -1;
}
h2{
    margin: 0%;
}
    </style>
</head>
<body>
    <div class="container-logo-nav-bar">
    <div class="logo-nav-bar">
    </div>
    <div class="logo-nav-bar">
    </div>
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
<div class="container-logo">
     <div class="container-try-nav-logo">
         <div class="try-nav-logo">
         <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 0 12.9736)" fill="#CE0033" fill-opacity="0.7"/>
            <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 0 8.07193)" fill="#CE0033" fill-opacity="0.7"/>
            <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 0 3.19672)" fill="#CE0033" fill-opacity="0.7"/>
            <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 4.90161 12.9736)" fill="#CE0033" fill-opacity="0.7"/>
            <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 4.90161 8.07193)" fill="#CE0033" fill-opacity="0.7"/>
            <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 4.90161 3.19672)" fill="#CE0033" fill-opacity="0.7"/>
            <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 9.80322 12.9736)" fill="#CE0033" fill-opacity="0.7"/>
            <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 9.80322 8.07193)" fill="#CE0033" fill-opacity="0.7"/>
            <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 9.80322 3.19672)" fill="#CE0033" fill-opacity="0.7"/>
          </svg>
        </div>

        <div class="logo-nav-bar">
        </div>

        <div class="try-nav-logo">
            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
               <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 0 12.9736)" fill="#CE0033" fill-opacity="0.7"/>
               <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 0 8.07193)" fill="#CE0033" fill-opacity="0.7"/>
               <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 0 3.19672)" fill="#CE0033" fill-opacity="0.7"/>
               <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 4.90161 12.9736)" fill="#CE0033" fill-opacity="0.7"/>
               <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 4.90161 8.07193)" fill="#CE0033" fill-opacity="0.7"/>
               <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 4.90161 3.19672)" fill="#CE0033" fill-opacity="0.7"/>
               <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 9.80322 12.9736)" fill="#CE0033" fill-opacity="0.7"/>
               <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 9.80322 8.07193)" fill="#CE0033" fill-opacity="0.7"/>
               <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 9.80322 3.19672)" fill="#CE0033" fill-opacity="0.7"/>
             </svg>
           </div>
    </div>
<div class="logo">
</div>


<div class="container-try-nav-logo">
   

   <div class="logo-nav-bar">
   </div>

   <div class="try-nav-logo">
       <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 0 12.9736)" fill="#CE0033" fill-opacity="0.7"/>
          <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 0 8.07193)" fill="#CE0033" fill-opacity="0.7"/>
          <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 0 3.19672)" fill="#CE0033" fill-opacity="0.7"/>
          <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 4.90161 12.9736)" fill="#CE0033" fill-opacity="0.7"/>
          <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 4.90161 8.07193)" fill="#CE0033" fill-opacity="0.7"/>
          <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 4.90161 3.19672)" fill="#CE0033" fill-opacity="0.7"/>
          <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 9.80322 12.9736)" fill="#CE0033" fill-opacity="0.7"/>
          <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 9.80322 8.07193)" fill="#CE0033" fill-opacity="0.7"/>
          <rect width="3.19672" height="3.19672" transform="matrix(1 0 0 -1 9.80322 3.19672)" fill="#CE0033" fill-opacity="0.7"/>
        </svg>
      </div>
      <div class="logo-nav-bar">
    </div>
</div>
</div>

<div class="formulaire">
    <div class="case-form">
        <svg width="82" height="82" viewBox="0 0 82 82" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="20.1639" height="20.1639" fill="#CE0033" fill-opacity="0.7"/>
            <rect y="30.918" width="20.1639" height="20.1639" fill="#CE0033" fill-opacity="0.7"/>
            <rect y="61.6694" width="20.1639" height="20.1639" fill="#CE0033" fill-opacity="0.7"/>
            <rect x="30.918" width="20.1639" height="20.1639" fill="#CE0033" fill-opacity="0.7"/>
            <rect x="30.918" y="30.918" width="20.1639" height="20.1639" fill="#CE0033" fill-opacity="0.7"/>
            <rect x="30.918" y="61.6694" width="20.1639" height="20.1639" fill="#CE0033" fill-opacity="0.7"/>
            <rect x="61.8361" width="20.1639" height="20.1639" fill="#CE0033" fill-opacity="0.7"/>
            <rect x="61.8361" y="30.918" width="20.1639" height="20.1639" fill="#CE0033" fill-opacity="0.7"/>
            <rect x="61.8361" y="61.6694" width="20.1639" height="20.1639" fill="#CE0033" fill-opacity="0.7"/>
          </svg>
    </div>
    <form method="POST" action="/personnel-login" class="form-group  registration-form" enctype="multipart/form-data">
        @csrf
            <h2>Connexion</h2>
            <p class="mandatory-fields">Tous les champs sont obligatoires</p>
            <label for="e_mail">Email :</label>
            <input type="email" id="email" name="e_mail" required autofocus placeholder="Saisir e-mail">
            
            <label for="mot_de_passe">Mot de passe :</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required placeholder="Saisir mot de passe">

            <p class="padding">Mot de passe oublié ?</p>

            <button type="submit" class="btn">Se connecter</button>
            <p class="login-prompt">Vous n'avez pas de compte ?     <a href="register" class="btn btn-outline-secondary bouton">Créer mon compte</a>
</p>
        </form>
        <div class="case-form1">
            <svg width="82" height="82" viewBox="0 0 82 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="20.1639" height="20.1639" fill="#CE0033" fill-opacity="0.7"/>
                <rect y="30.918" width="20.1639" height="20.1639" fill="#CE0033" fill-opacity="0.7"/>
                <rect y="61.6694" width="20.1639" height="20.1639" fill="#CE0033" fill-opacity="0.7"/>
                <rect x="30.918" width="20.1639" height="20.1639" fill="#CE0033" fill-opacity="0.7"/>
                <rect x="30.918" y="30.918" width="20.1639" height="20.1639" fill="#CE0033" fill-opacity="0.7"/>
                <rect x="30.918" y="61.6694" width="20.1639" height="20.1639" fill="#CE0033" fill-opacity="0.7"/>
                <rect x="61.8361" width="20.1639" height="20.1639" fill="#CE0033" fill-opacity="0.7"/>
                <rect x="61.8361" y="30.918" width="20.1639" height="20.1639" fill="#CE0033" fill-opacity="0.7"/>
                <rect x="61.8361" y="61.6694" width="20.1639" height="20.1639" fill="#CE0033" fill-opacity="0.7"/>
              </svg>
        </div>
    </div>
</div>
</body>
</html>


