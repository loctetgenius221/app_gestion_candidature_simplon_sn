<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formmations</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMV7WH0E3QtTWv0e49N8+TmkYh0kOhjcvR64qBk" crossorigin="anonymous">
  <style>
    .card-red{
      font-size: 20px;
      width: 350px;
      height: 250px;
    }
    .card-title{
        font-size: 20px;
        margin-bottom: 30px;
    }
    h6{
      margin-top: 15px;
      margin-bottom: 10px;
    }
    .btn-connect{
      color: white;
      padding-right: 15px;
    }
    .button{
        text-align: center;
        height: 40px;
        width: 290px;
        border: 2px solid red;
        .btn{
            background-color: while;
        }
    }
    .card-red{
        border: 2px solid red;
    }
    .card{
        border: none;
        margin-right: -25px;
        margin-top: -30px;
        margin-left: 20px;
        width: 350px;
      height: 250px;
    }
  </style>
</head>
<body>

<div class="container my-5">

  <div class="row">
    <div class="col">
      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
      <div class="row row-cols-1 row-cols-md-8">
        @foreach($formations as $formation)
          <div class="col">

              <div class="card-red">
                <div class="card">
                <div class="card-body d-flex flex-column">
                  <h6 class="card-title">{{ $formation->nom }}</h6>
                  <p class="flex-grow-2">
    <small class="text-muted">
        Date de début : {{ $formation->date_de_debut}} <br>
        Nom de cloture : {{ $formation->date_de_fin}}
              </small>
                </p>
                </div>
                <div class="button">
                    <button class="btn">Découvrir plus</button>
                </div>
              </div>
              </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha384-lZN37fLxoqAC6ABzH8E8XK4X3/AdHmy8Tlfk2Pz34uV1oLxefs/FiqFE5vNE6uZ9" crossorigin="anonymous"></script>
</body>
</html>