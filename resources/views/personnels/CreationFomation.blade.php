<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formations</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une formation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 20px;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Light gray background */
        }
        .container {
            max-width: 600px;
            background-color: #ffffff; /* White background for the form */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff; /* Bootstrap primary color */
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue for hover */
            border-color: #004085;
        }
        .form-control {
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row align-items-start">
      <div class="col">
        <h1>Ajouter une formation</h1>

        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

        <ul>
          @foreach($errors->all() as $error)
          <li class="alert alert-danger">{{ $error }}</li>
          @endforeach
        </ul>

        <form action="{{ route('CreationFomationTraitement') }}" method="POST" class="form-group"> 
          @csrf
          @method('POST')
          <div class="form-group">
            <label for="nom" class="form-label">Titre</label>
            <input type="text" class="form-control" id="nom" name="nom">
          </div>
          <div class="form-group">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description">
          </div>
          <div class="form-group">
            <label for="debouches" class="form-label">Débouchés</label>
            <input type="text" class="form-control" id="debouches" name="debouches">
                </div>
                    <div class="form-group">
            <label for="critere_de_validation" class="form-label">Critères de validation</label>
            <input type="text" class="form-control" id="critere_de_validation" name="critere_de_validation">
                </div>
            <div class="form-group">
                <label for="date_de_debut" class="form-label">Date de début de la formation</label>
                <input type="date" class="form-control" id="date_de_debut" name="date_de_debut">
            </div>  
            <div class="form-group">
                <label for="date_de_fin" class="form-label">Date de fin de la formation</label>
                <input type="date" class="form-control" id="date_de_fin" name="date_de_fin">
            </div>  
            <br>
            <div class="form-group">
            <label for="statut">Statut de la formation</label>

            <select name="statut" class="form-control" required>
                    <option value="Ouvert">Ouvert</option>
                    <option value="ferme">Fermé</option>
                    <option value="a venir">À venir</option>
            </select>
        </div>
          <div class="form-group">
            <label for="personnel_id">Personnel</label>
            <select name="personnel_id" class="form-control" required>
                @foreach($personnels as $personnel)
                    <option value="{{ $personnel->id }}">{{ $personnel->prenom }}</option>
                @endforeach
            </select>
        </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <a href="{{ route('formations.show') }}" class="btn btn-secondary">Liste des formations</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
