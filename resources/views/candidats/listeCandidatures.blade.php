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
    <link rel="stylesheet" href="{{ asset('css/listecandidature.css') }}">
</head>
<body>
    <div class="container">
        <section class="formation-venir">
            <h2 class="section-title">La liste des candidatures</h2>
            <div class="section-content">
                <img src="{{ asset('img/motif.svg') }}" class="motif motif1" alt="">
                @foreach ($candidatures as $candidature)
                <div class="card-border">
                    <div class="card-formation">
                        <h1 class="card-title">{{ $candidature->formation->nom }}</h1>
                        <div class="date">
                            <h2>Date début :</h2>
                            <span class="date">{{ $candidature->formation->date_de_debut }}</span>
                        </div>
                        <div class="date">
                            <h2>Date de fin :</h2>
                            <span class="date">{{ $candidature->formation->date_de_fin }}</span>
                        </div>
                        <div class="status">
                            <h2>Statut :</h2>
                            <span class="status">{{ $candidature->status }}</span>
                        </div>
                        <div class="icon">
                            @if(isset($candidature->identifiant))
                                <a href="{{ route('detail-candidature', ['id' => $candidature->identifiant]) }}">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            @else
                                <p>Erreur : ID de candidature manquant</p>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
                <img src="{{ asset('img/motif.svg') }}" class="motif motif2" alt="">
            </div>
        </section>
    </div>
</body>
</html>

@endsection
