<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_front.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <title>Observatoire du littorale</title>
  
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top mb-3">
        <div class="container-fluid container-lg d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-start text-decoration-none">
            <!--img src="img/logoUCAD.jpg" alt=""-->
            <span>Observatoire littoral</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link active" href="#">Accueil</a></li>
                <li><a class="nav-link" href="#">A propos</a></li>
                <li><a class="nav-link" href="#">Contact</a></li>
                <li><a class="nav-link" href="#">Se connecter &nbsp;</a></li>
            </ul>

            <!-- Bouton modal recherche -->
            <button
                type="button"
                class="btn btn-primary rounded"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
            >
                <i
                    class="bi bi-search"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                ></i>
            </button>
            &nbsp;&nbsp;
            <i class="bi bi-list mobile-nav-toggle"></i>

            <button type="button" id="butModal" class="btn btn-primary rounded" data-bs-toggle="modal"
                 data-bs-target="#myModal" data-bs-whatever="@fat">
                 <i class="bi bi-exclamation-triangle-fill"></i>
            </button>
          
        </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <section>
        <div class="bloc-1-accueil d-flex flex-column justify-content-end">
            <div class="w-50">
                <h1>Article sur le littoral</h1>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Laborum quidem. 
                </p>
                <a class="btn btn-primary rounded" href="article.html">Voir Plus</a>
            </div>
            
        </div>

        <div class="container-fluid">
            <div class="row container-fluid bloc-2-accueil">
                <div class="col-lg-9 col-sm-12 row">
                    @foreach($bloc_2_articles as $article)
                    <div class="col-lg-6 col-sm-12 article-2">
                        <img style="max-height: 20rem; height:20rem; width: 100%;" class="img-fluid rounded" src="img/art6.jpeg" alt="">
                        <h3>{{ $article["publication"]->titre }}</h3>
                        <p>
                            {{ $article["article"]->description }} 
                        </p>
                        <a class="btn btn-outline-primary rounded" href="{{ route("details-article", $article["article"]->id) }}">Voir Plus</a>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-3 col-sm-12 d-flex flex-column justify-content-between">
                    <div class="bloc-gauche">
                        <h4>Article sur le littoral</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Laborum quidem. 
                        </p>
                        <a href="article.html">Voir Plus</a>
                    </div>
                    <div class="bloc-gauche">
                        <h4>Article sur le littoral</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Laborum quidem. 
                        </p>
                        <a href="article.html">Voir Plus</a>
                    </div>
                    <div class="bloc-gauche">
                        <h4>Article sur le littoral</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Laborum quidem. 
                        </p>
                        <a href="article.html">Voir Plus</a>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row  bloc-3-accueil">
                    <h2 style="color: #033386;margin-bottom: 10px;">Bloc de 4 articles</h2>
                    <div class="col-lg-3 col-sm-12 article-4">
                        <img style="max-height: 10rem; height:10rem; width: 100%;" class="img-fluid rounded" src="img/art4.jpg" alt="">
                        <h4>Article sur le littoral</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        </p>
                        <a href="article.html">Voir Plus</a>
                    </div>
                    <div class="col-lg-3 col-sm-12 article-4">
                        <img style="max-height: 10rem; height:10rem; width: 100%;" class="img-fluid rounded" src="img/art3.jpg" alt="">
                        <h4>Article sur le littoral</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        </p>
                        <a href="article.html">Voir Plus</a>
                    </div>
                    <div class="col-lg-3 col-sm-12 article-4">
                        <img style="max-height: 10rem; height:10rem; width: 100%;" class="img-fluid rounded" src="img/art2.jpg" alt="">
                        <h4>Article sur le littoral</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        </p>
                        <a href="article.html">Voir Plus</a>
                    </div>
                    <div class="col-lg-3 col-sm-12 article-4">
                        <img style="max-height: 10rem; height:10rem; width: 100%;" class="img-fluid rounded" src="img/art1.jpeg" alt="">
                        <h4>Article sur le littoral</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        </p>
                        <a href="article.html">Voir Plus</a>
                    </div>
                </div>
            </div> 
            
            <div class="container-fluid">
                <div class="row bloc-4-accueil">
                    <div class="col-sm-12 col-lg-6">
                        <h4>Article sur le littoral</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Laborum quidem. 
                        </p>
                        <a href="article.html">Voir Plus</a>

                        <h4 class="mt-4">Article sur le littoral</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Laborum quidem. 
                        </p>
                        <a href="article.html">Voir Plus</a>
                    </div>
                    <div class="col-sm-12 col-lg-6 rounded bloc-4-gauche">
                    </div>
                </div>
            </div>
        </div>   
    </section>

    <footer class="text-center lead bg-dark w-100 mb-0">
        Made with &#10084; by M2GDIL 
    </footer>

    <!-- Modal Recherche -->
    <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Recherche article</h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <form class="d-flex">
                        <input
                            class="form-control rounded"
                            type="search"
                            placeholder="Rechercher"
                            aria-label="Search"
                        />
                        <!--button class="btn btn-outline-success" type="submit">Search</button!-->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Fermer
                    </button>
                    <button type="button" class="btn btn-primary">Rechercher</button>
                </div>
            </div>
        </div>
    </div>
      <!-- .Formulaire Alerte -->
      <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header" style = "margin-left: 20%">
                    <h5 class="modal-title" id="exampleModalLabel" >Vous allez lancer une alerte
                    <i class="bi bi-exclamation-triangle-fill" style="color : red"></i>
                    </h5>
                    
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                             
                    </button>
                </div>
                <div class="modal-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                     @endif
                    <form method="post" action = "{{ route('alerte.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name"  class="col-form-label">A propos de:</label>
                        <input type="text" id="titre" name="titre" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Description:</label>
                        <textarea id= "description" name = "description" class="form-control" id="message-text"></textarea>
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Lancer Alerte</button>
                </div>
                </form>
                </div>
            </div>
            </div>
</body>
</html>