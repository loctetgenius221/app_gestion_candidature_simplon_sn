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
                @foreach ($candidatures as $candidature)
                <div class="card">
                    @if($candidature->formation)
                        <h1 class="card-title">{{ $candidature->formation->nom }}</h1>
                    @else
                        <h1 class="card-title">Formation non trouvée</h1>
                    @endif
                    <div class="date">
                        <h2>Date soumission : </h2>
                        <span class="date">{{ $candidature->created_at->format('d/m/Y') }}</span>
                    </div>
                    {{-- <div class="date">
                        <h2>Date de fin : </h2>
                        <span class="date">{{ $candidature->formation->date_de_fin()->format('d/m/Y') }}</span>
                    </div> --}}

                    <div class="card-statut">
                        <h2>Statut : <span class="statut">En attente</span></h2>
                        <a href="{{ route('detail-candidature', ['id' => $candidature->identifiant]) }}">
                            <img src="{{ asset('img/icondetail.svg') }}" alt="Détails">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

        </section>

        <section class="formation-venir">
            <h2 class="section-title">Nos formations à venir</h2>
            <div class="section-content">
                <img src="{{ asset('img/motif.svg') }}" class="motif motif1" alt="">
                @foreach ($formations as $formation)
                <div class="card-border">
                    <div class="card-formation">
                        <h1 class="card-title">{{ $formation->nom }}</h1>
                        <div class="date">
                            <h2>Date début : </h2>
                            <span class="date">{{ $formation->date_de_debut }}</span>
                        </div>
                        <div class="date">
                            <h2>Date de fin : </h2>
                            <span class="date">{{ $formation->date_de_fin}}</span>
                        </div>

                        <form action="{{ route('detail-formation',['id' => $formation->id]) }}" method="GET">
                            @csrf
                            <input type="hidden" name="id" value="{{ $formation->id }}">
                            <button type="submit" class="detail-formation">Découvrir plus...</button>
                        </form>
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
