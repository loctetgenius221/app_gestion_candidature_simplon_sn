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
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">

    <button>
        <a href="{{route('formations.create')}} ">Ajoute une formation</a>
    </button>
    </body>
</html>