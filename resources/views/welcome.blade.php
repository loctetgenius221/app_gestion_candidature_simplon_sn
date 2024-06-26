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
        padding-top: 50px;
        font-family: "Roboto Mono";
        width: 100%;
        height: 620px;
        background: rgba(217, 217, 217, 0.17);
        h4{
            
            color: #CE0033;
            font-size: 32px;
            margin-bottom: 60px;
            margin: 5px;
        }
        span{
            color: #CE0033;
        }
        h5{
            font-weight: bold;
            text-align: center;
            font-size: 20px;
            margin: 12px;
        }
        .infos{
            margin-left: 110px;
            width: 500px;
            p{
                color: var(--couleur-tertiaire, #000);
            /* styleSousTitre */
            font-family: "Roboto Mono";
            font-size: 22px;
            font-style: normal;
            font-weight: 500;
            line-height: normal; 
            margin-top: 40px;
            }
        }
            h4{
                color: black;
                font-weight: bold;
            }
            .texte2{
                margin-left: 160px;
            }
            .texte3{
                margin-left: 240px;
            }
        }
        .rond1{
        width: 202px;
        height: 202px;
        flex-shrink: 0;
        margin-left: 75%;
        margin-top: -30%;
        border-radius: 202px;    
        }
        .rond2{
        width: 87px;
        height: 87px;
        flex-shrink: 0;
        margin-left: 68%;
        margin-top: -7%;
        border-radius: 87px;
        background: url(<path-to-image>) lightgray 50% / cover no-repeat;
        }
        .rond3{
        width: 202px;
        height: 202px;
        flex-shrink: 0;
        margin-left: 68%;
        border-radius: 202px;
        background: url(<path-to-image>) lightgray -67.591px -15.612px / 149.837% 100% no-repeat;
        }
        .rond4{
        width: 87px;
        height: 87px;
        flex-shrink: 0;
        margin-left: 84%;
        margin-top: -15%;
        border-radius: 87px;
        background: url(<path-to-image>) lightgray 50% / cover no-repeat;
        }

    .valeurs {
        margin-left: 150px;
        padding: 20px;
        font-family: "Roboto Mono";
        width: 100%;
        height: 620px;
    }

    h1 {
        text-align: center;
        color: #d80027;
        margin-bottom: 30px;
    }

    .values {
        border: 2px solid red;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin-bottom: 20px;
        border-radius: 100px;
        width: 80%;
        justify-content: center;
        height: 580px;
    }

    .value-box {
        margin-top: 70px;
        margin-bottom: 40px;
        background-color: white;
        width: 35%;
        margin-bottom: 20px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-left: 50px;
        margin-right: 50px;
    }

    .value-box img {
        width: 100%;
        height: auto;
        margin-left: 20px;
    }

    .value-content h2 {
        color: #d80027;
        margin-bottom: 15px;
        margin-left: -40px;
    }

    p {
        color: #333;
        line-height: 1.6;
        margin-left: -40px;
    }
        
    .valeur{
        width: 80%;
        height: 600px;
        border: 5px solid #CE0033;
        border-radius: 15px;
    }

    h1, h2 {
        color: #d80027;
    }

    .card-title {
        color: #d80027;
    }

    .statistique {
        margin-top: 1500px;
        background-color: #d80027;
        h2{
            font-size: 40px;
            font-weight: bold;
        }
    }

    .statistique h2, .statistique p {
        margin: 0;
        color: #FFF;
    }

    .card-competence{
            margin-top: 60px;
            margin-right: 15px;
            padding-top: 35px;
            height: 300px;
            width: 250px;
            background-color: white;
            border-left: 10px solid var(--Couleur-seconder, #CE0033);
            background: var(--couleur-primaire, #FFF);
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset, 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            font-family: "Roboto Mono";
            font-style: normal;
            font-weight: 500;
            line-height: normal; 
        
            p{
                padding-left: 10px;
                font-size: 15px;
            }
        }
        .competences{
            display: flex;
            width: 70%;
            justify-content: space-between;
            li{
                margin-left: 2px;
            }
        }
        .pedagogie-container{
            margin-top: 100px;
        padding-top: 20px;
        font-family: "Roboto Mono";
        height: 650px;
        background: rgba(217, 217, 217, 0.17);
        }
        .pedagogie{
        padding-top: 50px;
        font-family: "Roboto Mono";
        width: 100%;
        height: 500px;
        display: flex;
        h4{
            
            color: #CE0033;
            font-size: 32px;
            margin-bottom: 60px;
            margin: 5px;
        }
        .infos{
            margin-left: 110px;
            width: 500px;
            p{
                color: var(--couleur-tertiaire, #000);
            /* styleSousTitre */
            font-family: "Roboto Mono";
            font-size: 17px;
            font-style: normal;
            font-weight: 500;
            line-height: normal; 
            margin-top: 40px;
            }
            h4{
                font-size: 20px;
                font-weight: 500;
                margin-left: -40px;
            }
        }
            }
        .card-body ul {
            padding-left: 0;
        }

        .card-body ul li {
            list-style: none;
            padding: 5px 0;
        }

        .carousel-item img {
            width: 100%;
            height: auto;
        }
  </style>
</head>
<body >

<div class="container my-5">
  <div class="row">
    <div class="col">
      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
      <div class="banner">
        <div class="infos">
            <h4 class="texte1"><span> Simplon  </span> Sénégal </h4>
                <h4 class="texte2"> Les <span> métiers </span> </h4>
               <h4 class="texte3">  du <span>  Numérique</span> </h4>
                <p>Simplon Sénégal, à travers son programme 
                    hashtag#AfricanTechBridge, a formé 22 
                    membres de l'Association des Personnes en 
                    Situation de Handicap (PSH) de Guinaw 
                    Rails du 13 au 17 mai 2024, et 21 membres
                    de l'Association des Maîtres et 
                    Entrepreneurs du Sénégal les 21 et 22 
                    avril, aux compétences hashtag#numériques 
                    fondamentales respectivement au Centre 
                    socio-éducatif et culturel Apix Guinaw DBD7D7
                    Rail Sud et à la Mairie de Pikine Ouest.</p>

        </div>
        <div class="images">
        <div class="rond1">
            <img src="{{asset('images/Ellipse 1.png') }} " alt="">
        </div>
        <div class="rond2">
            <img src="{{asset('images/Ellipse 5.png') }} " alt="">
        </div>
        <div class="rond3">
            <img src="{{asset('images/Ellipse 2.png') }} " alt="">
        </div>
        <div class="rond4">
            <img src="{{asset('images/Ellipse 4.png') }}" alt="">
        </div>
      </div>
        </div>
        <h2 class="text-center my-5">Nos valeurs</h2>
        <div class="values">
            <div class="value-box">
            <img src="{{asset('images/rect1.png')}} " alt="Leadership">
                <div class="value-content">
                    <h2>Motivation & Partage</h2>
                    <p>Convaincus que le numérique ne doit plus être un <br>
                        privilège au profit de certains et au détriment <br>
                        d’autres, nous travaillons à ce que l’accès soit <br>
                        garanti à tous. Nous développons des <br>
                        programmes pour toutes les couches de la société <br>
                        en restant inclusifs.</p>
                </div>
            </div>
            <div class="value-box">
                <div class="value-content">
                    <h2>Solidarité & Inclusion</h2>
                    <p>Simpson s'investit également dans des actions <br>
                        de plaidoyer et de sensibilisation au numérique <br>
                        auprès des femmes, des jeunes filles et des <br>
                        publics précaires dans une dynamique d’égalité <br>
                        des chances et de mixité. Il vise un minimum <br>
                        de 35% de femmes et de 10% de personnes en <br>
                        situation de handicap (PSH) dans ses cohortes.</p>
                </div>
                <img src="{{asset('images/rect2.png') }} " alt="Leadership">
            </div>     
        </div>
        <div class="values">
            <div class="value-box">
            <img src="{{asset('images/rect1.png')}} " alt="Leadership">
                <div class="value-content">
                    <h2>Motivation & Partage</h2>
                    <p>Convaincus que le numérique ne doit plus être un <br>
                        privilège au profit de certains et au détriment <br>
                        d’autres, nous travaillons à ce que l’accès soit <br>
                        garanti à tous. Nous développons des <br>
                        programmes pour toutes les couches de la société <br>
                        en restant inclusifs.</p>
                </div>
            </div>
            <div class="value-box">
                <div class="value-content">
                    <h2>Solidarité & Inclusion</h2>
                    <p>Simpson s'investit également dans des actions <br>
                        de plaidoyer et de sensibilisation au numérique <br>
                        auprès des femmes, des jeunes filles et des <br>
                        publics précaires dans une dynamique d’égalité <br>
                        des chances et de mixité. Il vise un minimum <br>
                        de 35% de femmes et de 10% de personnes en <br>
                        situation de handicap (PSH) dans ses cohortes.</p>
                </div>
                <img src="{{asset('images/rect2.png') }} " alt="Leadership">
            </div>     
        </div>
        <div class="pedagogie-container">
        <h2 class="text-center my-5">Notre approche pédagogique</h2>
        <div class="pedagogie">
        <div class="infos">
        <h4>Chez Simplon SN, nous croyons fermement en la pédagogie active pour favoriser l’apprentissage optimal.</h4>
        <p> Nos formations Simplon s’appuient sur une pédagogie qui se <br>
        fonde sur une approche par les compétences. Son objectif étant de <br>
        rendre l’apprenant.e acteur.trice de sa formation. Lors de <br>
        l’apprentissage, l’apprenant.e est mis.e en situation de travail avec <br>
        un ensemble de dispositifs afin de l’accompagner dans <br>
        l’acquisition des compétences métiers et transversales. <br>
        Simplon dispose d’un studio pédagogique avec des ingénieurs <br>
        pédagogiques pour la conception de référentiels / programmes de <br>
        formation. Plus d’une vingtaine de référentiels de formation sont <br>
        proposés en fonction des besoins en compétences métiers des <br>
        entreprises.</p>
        </div>
        <div class="images">
            <img src="{{asset('images/Rectangle 12.png') }}" alt="">
        </div>
      </div>
        </div>
        </div>

    <div class="statistique bg-danger text-white text-center py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h2>+20 000</h2>
                        <p>Personnes Formées</p>
                    </div>
                    <div class="col-md-3">
                        <h2>96%</h2>
                        <p>Sorties positives</p>
                    </div>
                    <div class="col-md-3">
                        <h2>+50%</h2>
                        <p>Femmes Formées</p>
                    </div>
                    <div class="col-md-3">
                        <h2>45</h2>
                        <p>Programmes</p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-center my-5">Compétences</h2>

        <div class="competences">
            <div class="card-competence">
            <ul>
                            <li>Marketing digital</li> <br>
                            <li>Graphic Design</li> <br>
                            <li>Référencement</li> <br>
                            <li>UI/UX Design</li> <br>
                            <li>Développement web</li> <br>
                            <li>Développement mobile</li>
                        </ul>
            </div>

            <div class="card-competence">
            <ul >
                            <li>Data science et analyse de <br> données</li> <br>
                            <li>Machine learning</li> <br>
                            <li>IoT</li> <br>
                            <li>Esprit d'équipe</li> <br>
                            <li>Leadership</li> <br>
                            <li>Marketing digital</li>
                        </ul>
            </div>

            <div class="card-competence">
            <ul>
                            <li>WordPress</li> <br>
                            <li>Intelligence émotionnelle</li> <br>
                            <li>Résilience</li> <br>
                            <li>Motivation</li> <br>
                            <li>Gestion du temps</li> <br>
                            <li>Cloud computing et services <br> cloud</li>
                        </ul>
            </div>
        </div>

      <!--     <h2 class="text-center my-5">Alumnis</h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card mb-4">
                        <div class="row no-gutters">
                            <div class="col-md-2">
                                <img src="alumni1.jpg" class="card-img" alt="Moussa Sagna">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title text-danger">Moussa Sagna</h5>
                                    <p class="card-text">Mon expérience à Simplon m'a ouvert beaucoup de portes et je ne regrette absolument pas d'y avoir fait la formation de la P7 en Developpement Web et Web Mobile.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-4">
                        <div class="row no-gutters">
                            <div class="col-md-2">
                                <img src="alumni1.jpg" class="card-img" alt="Moussa Sagna">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title text-danger">Moussa Sagna</h5>
                                    <p class="card-text">Mon expérience à Simplon m'a ouvert beaucoup de portes et je ne regrette absolument pas d'y avoir fait la formation de la P7 en Developpement Web et Web Mobile.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card mb-4">
                        <div class="row no-gutters">
                            <div class="col-md-2">
                                <img src="alumni1.jpg" class="card-img" alt="Moussa Sagna">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title text-danger">Moussa Sagna</h5>
                                    <p class="card-text">Mon expérience à Simplon m'a ouvert beaucoup de portes et je ne regrette absolument pas d'y avoir fait la formation de la P7 en Developpement Web et Web Mobile.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-10" src="{{asset('images/Ellipse 9.png') }}" alt="First slide">
                <h5 class="card-title text-danger">Moussa Sagna</h5>
                <p class="card-text">Mon expérience à Simplon m'a ouvert beaucoup de portes et je ne regrette absolument pas d'y avoir fait la formation de la P7 en Developpement Web et Web Mobile.</p>

                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>




                <div class="carousel-item">
                    <div class="card mb-4">
                        <div class="row no-gutters">
                            <div class="col-md-2">
                                <img src="alumni1.jpg" class="card-img" alt="Moussa Sagna">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> -->
  </div>
 
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha384-lZN37fLxoqAC6ABzH8E8XK4X3/AdHmy8Tlfk2Pz34uV1oLxefs/FiqFE5vNE6uZ9" crossorigin="anonymous"></script>
</body>
</html>