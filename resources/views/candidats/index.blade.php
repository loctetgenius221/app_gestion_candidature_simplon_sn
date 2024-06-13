@extends('layouts.candidat')

@section('dashboard', 'candidat')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/maincandidat.css') }}">

</head>
<body>

    <div class="container">
        <section class="candidature-soumises">
            <h2 class="section-title">Candidatures soumises</h2>
            <div class="section-content">

                <div class="card">
                    <h1 class="card-title">Concepteur-ice Développeur-se d'Applications</h1>
                    <div class="date">
                        <h2>Date début : </h2>
                        <span class="date">11 juin 2024</span>
                    </div>
                    <div class="date">
                        <h2>Date de fin : </h2>
                        <span class="date">11 juin 2024</span>
                    </div>

                    <div class="card-statut">
                        <h2>Statut : <span class="statut">En attente</span></h2>
                        <a href=""><img src="{{ asset('img/icondetail.svg') }}" alt=""></a>
                    </div>
                </div>

            </div>

        </section>

        {{-- <section class="formation-venir">
            <h2 class="section-title">Nos formations à venir</h2>
            <div class="section-content">
                <div class="card-formation">
                    <h1 class="card-title">Concepteur-ice Développeur-se d'Applications</h1>
                    <div class="date">
                        <h2>Date début : </h2>
                        <span class="date">11 juin 2024</span>
                    </div>
                    <div class="date">
                        <h2>Date de fin : </h2>
                        <span class="date">11 juin 2024</span>
                    </div>

                    <button>Découvrir plus...</button>
                </div>
            </div>

        </section> --}}
    </div>

</body>
</html>

@endsection
