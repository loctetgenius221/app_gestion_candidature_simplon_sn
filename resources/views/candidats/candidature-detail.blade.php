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
            <h2 class="section-title">Détails de la candidature</h2>
            <a href="{{ route('candidatures.liste') }}" class="retour">Retour</a>
        </div>

        <div class="content">
            <div class="info-formation">
                <h1>{{ $candidature->formation->nom }}</h1>
                <div>
                    <h4>Biographie :</h4>
                    <p>{{ $candidature->biographie }}</p>
                </div>
                <div>
                    <h4>Motivation :</h4>
                    <p>{{ $candidature->motivation }}</p>
                </div>

                <div class="detail-date statut">
                    <h3>Statut : <span>{{ $candidature->statut }}</span></h3>
                </div>
                <a href="{{ route('candidatures.liste') }}" class="detail-formation right" style="text-decoration: none">Retour</a>

            </div>
            <div class="pre-requis">
                <h4>Informations personnelles :</h4>
                @if ($candidature->candidat)
                    <p>Prénom : <span>{{ $candidature->candidat->prenom }}</span></p>
                    <p>Nom : <span>{{ $candidature->candidat->nom }}</span></p>
                    <p>Téléphone : <span>{{ $candidature->candidat->telephone }}</span></p>
                    <p>Email : <span>{{ $candidature->candidat->email }}</span></p>
                    <p>Adresse : <span>{{ $candidature->candidat->adresse }}</span></p>
                    <p>Né(e) : <span>{{ $candidature->candidat->date_de_naissance }}</span></p>
                    @if ($candidature->candidat->cv)
                        <a href="{{ asset($candidature->candidat->cv) }}" target="_blank" class="cv-pdf">
                            <i class="fa-regular fa-file-pdf"></i>
                        </a>
                    @else
                        <p>Aucun CV trouvé pour ce candidat.</p>
                    @endif

                @else
                    <p>Aucune information sur le candidat trouvée.</p>
                @endif
            </div>
        </div>
    </div>

</body>
</html>

@endsection
