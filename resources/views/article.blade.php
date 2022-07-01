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
        <div class="container-fluid d-flex align-items-center justify-content-between">

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
        </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <section>
        <div class="bloc-1-detail-article mb-5 d-flex flex-column justify-content-center align-items-center">
            <h1 class="mt-5">{{ $publication->titre }}</h1>
            <p>{{ $nomCategorie }} | <i class="bi bi-calendar"></i> {{ $publication->datePublication }} | <i class="bi bi-pen"></i> {{ $nomAuteur }}</p>
        </div>
        <div class="container">
            <div class="mb-5">
                <img style="max-height: 20rem;" class="img-fluid rounded w-100" src="/img/art3.jpg" alt="imageArticle">
            </div>
            <div class="mb-5">
                <p class="lead">
                    {{ $article->description}}
                </p>
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
     
</body>
</html>