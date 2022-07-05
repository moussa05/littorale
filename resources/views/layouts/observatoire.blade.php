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
    <link rel="stylesheet" href="{{ asset('css/icofont/icofont.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/popper.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <title>Observatoire du littorale</title>
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top mb-3">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-start text-decoration-none">
            <!--img src="img/logoUCAD.jpg" alt=""-->
            <span>Observatoire littoral</span>
        </a>
        <nav id="navbar" class="navbar">
            <ul class="mr-5">
                <li><a class="nav-link active" href="#">Accueil</a></li>
                <li><a class="nav-link" href="#">A propos</a></li>
                <li><a class="nav-link" href="#">Contact</a></li>
                <li><a class="nav-link" href="#">Ressources &nbsp;</a></li>
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

            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
        
    </header><!-- End Header -->

    <section>
        {{ $slot }}
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

    <div class="customizer-links">
        <div class="nav flex-column nac-pills" id="c-pills-tab" role="tablist" aria-orientation="vertical"> <a
            class="nav-link" id="c-pills-home-tab" data-bs-toggle="modal" href="#myModal">
            <div class="settings"><i class="icofont-alarm"></i></div><span>Lancer Alerte</span>
            </a> <a class="nav-link" id="c-pills-home-tab"  >
            <div class="settings"><i class="icofont-users-alt-5"></i></div><span>Nous Rejoindre</span>
            </a> <a class="nav-link" id="c-pills-home-tab1" data-bs-toggle="pill" href="#c-pills-profile"
            data-bs-original-title="" title="">
            <div class="settings color-settings"><i class="icofont-book-mark"></i></div><span>A propos</span>
            </a> 
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
                        
                    
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-primary">Lancer Alerte</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       



</body>
</html>

