<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('dashboard', 'candidat')</title>
    <link rel="stylesheet" href="{{ asset('css/nav-footer-candidat.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <header class="header">
        <img src="{{ asset('img/logo-footer.svg') }}" class="logo" alt="logo simplon">
        <nav class="navbar">
            <ul>
                <li><a href="{{ route('candidat-dashboard') }}" class="active">Acceuil</a></li>
                <li><a href="{{ route('dashboard-candidat-formation') }}">Formation</a></li>
                <li><a href="#cadidature">Candidature</a></li>
            </ul>
        </nav>
        <div class="profil-content">
            <img src="{{asset('img/Vectornotif.png') }}" alt="">
            <div class="profil">
                <img src="{{ asset('img/VectorUser.png') }}" alt="">
                <h3>Prénom NOM</h3>
                <i class="fa-solid fa-sort-down"></i>
            </div>
        </div>
    </header>

    @yield('content')

    <footer>
        <p>Tout droit réservés - copy right - 2024 SIMPLON SÉNÉGAL</p>
    </footer>

</body>
</html>
