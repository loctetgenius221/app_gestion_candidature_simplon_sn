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
            <h2 class="section-title">Formulaire de candidature</h2>
            {{-- <a href="" class="retour">Retour</a> --}}
        </div>

        <div class="succes-section">
            <div class="succes-content">
                <a href="{{ route('dashboard-candidat-formation') }}">
                    <span class="succes-icon"><i class="fa-solid fa-xmark"></i></span>
                </a>
                <img src="{{ asset('img/🎉.png') }}" alt="">
                <p>Votre candidature a été soumise avec succès</p>
                <img src="{{ asset('img/🎉 (1).png') }}" alt="">
            </div>
        </div>
    </div>

</body>
</html>

@endsection
