<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formmations</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMV7WH0E3QtTWv0e49N8+TmkYh0kOhjcvR64qBk" crossorigin="anonymous">
  <style>
    body{
        background: var(--couleur-primaire, #FFF);
    }
    .card-red{
      border: 2px solid #CE0033;
      font-size: 20px;
      width: 350px;
      height: 250px;
      margin-top: 70px;
    }
    .card-title{
        font-family: "Roboto Mono";
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 30px;
        margin-left: 10px;
    }
    p{
        font-family: "Roboto Mono";
        margin-left: 10px;
        font-size: 14px;
        font-weight: bold;
    }
    h6{
      font-family: "Roboto Mono";
      margin-top: 15px;
      margin-bottom: 10px;
    }
    .btn-connect{
      font-family: "Roboto Mono";
      color: white;
      padding-right: 15px;
    }
    .button{
        font-family: "Roboto Mono";
        margin-bottom: 15px;
        text-align: center;
        height: 40px;
        width: 290px;
        border: 2px solid #CE0033;
        margin-left: 10px;
        .btn{
            background-color: while;
            color: #CE0033;
            font-weight: 500;
        }
    }
    .card{
        font-family: "Roboto Mono";
        border: none;
        margin-right: -15px;
        margin-top: -15px;
        margin-left: 10px;
        width: 350px;
        height: 250px;
    }
    .span{
        font-family: "Roboto Mono";
        font-weight: 400;
        margin-left: 100px;
    }
    .ligne{
        margin-left: 45%;
        width: 100px;
        border: 2px solid red;
        margin-top: 70px;
        margin-bottom: 25px;
        color: #CE0033;
        
    }
    .banner{
        font-family: "Roboto Mono";
        width: 100%;
        height: 620px;
        background: rgba(217, 217, 217, 0.17);
        h4{
            text-align: center;
            color: #CE0033;
            font-size: 32px;
            margin-bottom: 60px;
            margin: 5px;
        }
        h5{
            font-weight: bold;
            text-align: center;
            font-size: 20px;
            margin: 12px;
        }
        .card-competence{
            margin-top: 60px;
            margin-right: 15px;
            padding-top: 30px;
            height: 260px;
            width: 300px;
            background-color: white;
            border-left: 10px solid var(--Couleur-seconder, #CE0033);
            background: var(--couleur-primaire, #FFF);
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset, 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            font-family: "Roboto Mono";
            font-style: normal;
            font-weight: 500;
            line-height: normal; 
            .titre{
                color: #CE0033;;
            }
        
            p{
                padding-left: 10px;
                font-size: 15px;
            }
        }
        .competences{
            display: flex;
            justify-content: space-between;
        }
        .img{
            height: 50px;
            width: 50px;
        }

        .img1{
            padding-left: 80%;
        }
    }
  </style>
</head>
<body>

<div class="container my-5">
<div class="img1"><img src="{{asset('images/1.png')}}" alt=""> </div>
    <img src="{{asset('images/1.png')}}" alt="">
  <div class="row">
    <div class="col">
      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
      <div class="banner">
        <h4>Vous souhaitez rejoindre l’une de nos formation ? N’attendez plus vous êtes au bon endroit</h4>
        <hr class="ligne">
        <h5>Pour bénéficier de nos formations, plusieurs étapes doivent être franchies. Ainsi, nous lançons un appel à candidatures afin de sélectionner les bénéficiaires en fonction de nos critères.</h5>

        <div class="competences">
            <div class="card-competence">
                <p class="titre">Appel à candidature</p>
                <p>Un appel à candidatures <br>
                    est lancé sur nos pages <br>
                     sociales. Ainsi, nous <br>
                    invitons tous les individus <br>
                    intéressés à postuler en <br>
                    remplissant notre <br>
                    formulaire en ligne.</p>
            </div>

            <div class="card-competence">
                <p class="titre">Appel à candidature</p>
                <p>Une fois que nous avons reçu <br>
                    les candidatures, nous <br>
                    organisons des réunions <br>
                    d’informations pour présenter <br>
                     plus en détail notre programme <br>
                     de formation.</p>
            </div>

            <div class="card-competence">
                <p class="titre">Appel à candidature</p>
                <p>Après la réunion d’informations, <br>
                    nous procédons à des tests <br>
                    individuels pour évaluer les <br>
                    compétences des candidats.</p>
            </div>


            <div class="card-competence">
                <p class="titre">Appel à candidature</p>
                <p>La dernière étape de notre <br>
                    processus de sélection consiste à <br>
                    choisir les bénéficiaires qui seront <br>
                    admis dans nos formations</p>
            </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-6">
        @foreach($formations as $formation)
          <div class="col">
            <a href="{{ route('formations.details', $formation->id) }}" class="text-decoration-none text-dark">
              <div class="card-red">
                <div class="card">
                <div class="card-body d-flex flex-column">
                  <h6 class="card-title">{{ $formation->nom }}</h6>
                  <p class="flex-grow-2">
                    <p>
                    Date de début : <span class="span"> {{ $formation->date_de_debut}}</span>   <br>
                    </p>       
                    <p>Nom de cloture : <span class="span"> {{ $formation->date_de_fin}}</span></p>
              </small>
                </p>
                <div class="button">
                    <button class="btn">Découvrir plus...</button>
                </div>
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
