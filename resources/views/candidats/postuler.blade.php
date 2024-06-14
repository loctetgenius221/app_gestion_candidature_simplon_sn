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
            <a href="{{ route('dashboard-candidat-formation', ['id' => $formation->id]) }}" class="retour">Retour</a>
        </div>

        <form action="{{ route('postuler-traitement', ['id' => $formation->id])}}" method="POST" class="formulaire-candidat" enctype="multipart/form-data">
            @csrf
            <h1>{{ $formation->nom }}</h1>
            <div class="form-group">
                <label for="biographie">Biographie</label>
                <textarea name="biographie" id="biographie" cols="30" rows="10" name="biographie"></textarea>
            </div>
            <div class="form-group">
                <label for="motivation">Motivation</label>
                <textarea name="motivation" id="motivation" cols="30" rows="10" name="motivation"></textarea>
            </div>
            <div class="form-group-flex">
                <div class="form-input">
                    <label for="niveau_etude">Niveau d'étude</label>
                    <select name="niveau_etude" id="niveau_etude" class="input-50">
                        <option value="Bfem">Bfem</option>
                        <option value="Baccalauréat">Baccalauréat</option>
                        <option value="Licence 1">Licence 1</option>
                        <option value="Licence 2">Licence 2</option>
                        <option value="Licence 3">Licence 3</option>
                        <option value="Master">Master</option>
                    </select>
                </div>
                <div class="form-input">
                    <label for="cv">Uploader son CV</label>
                    <input type="file" name="cv" class="input-50">
                </div>
            </div>
            <button type="submit" class="detail-formation">Candidater</button>
        </form>
    </div>

</body>
</html>

@endsection
