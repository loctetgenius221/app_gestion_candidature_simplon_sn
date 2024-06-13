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
        <section class="formation-venir">
            <h2 class="section-title">Nos formations à venir</h2>
            <div class="section-content">
                <div class="card-formation">
                    @foreach ($formations as $formation)
                        <h1 class="card-title">{{ $formation->nom }}</h1>
                        <div class="date">
                            <h2>Date début : </h2>
                            <span class="date">{{ $formation->date_debut }}</span>
                        </div>
                        <div class="date">
                            <h2>Date de fin : </h2>
                            <span class="date">{{ $formation->date_fin}}</span>
                        </div>

                        <button>Découvrir plus...</button>
                    @endforeach
                </div>
            </div>

        </section>
    </div>

</body>
</html>

@endsection
