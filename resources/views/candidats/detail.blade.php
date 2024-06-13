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
        <div class="content-head">
            <h2 class="section-title">Détails de la formation</h2>
            <a href="{{ route('dashboard-candidat-formation') }}" class="retour">Retour</a>
        </div>

        <div class="content">
            <div class="info-formation">
                <h1>{{ $formation->nom }}</h1>
                <p>{{ $formation->description }}</p>
                <div class="detail-date">
                    <h3>Début : <span>{{ $formation->date_de_debut }}</span></h3>
                    <h3>Fin : <span>{{ $formation->date_de_fin }}</span></h3>
                    <h3>Statut : <span>{{ $formation->statut }}</span></h3>
                </div>
                <h4>Débouchés :</h4>
                <p>{{ $formation->debouches }}</p>
                <form action="{{ route('postuler', ['id' => $formation->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $formation->id }}">
                    <button class="detail-formation" type="submit">Candidater</button>
                </form>
            </div>
            <div class="pre-requis">
                <h4>Pré-requis :</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, labore.</p>
            </div>
        </div>
    </div>

</body>
</html>

@endsection
