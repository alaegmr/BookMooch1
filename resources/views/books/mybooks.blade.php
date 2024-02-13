<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .navbar {
            background-color: #15414F; /* Couleur de fond de la barre de navigation */
            border-bottom: 1px solid #dee2e6; /* Bordure inférieure */
            padding: 10px 0; /* Espacement intérieur haut et bas */
        }

        .navbar-brand img {
            max-height: 40px; /* Hauteur maximale du logo */
        }

        .nav-link {
            color: #fafafa !important; /* Couleur du texte des liens */
            font-weight: bold; /* Gras */
        }

        .nav-link:hover {
            color: #f0ff7c !important; /* Couleur du texte des liens au survol */
        }

        .navbar-nav.ml-auto .nav-link {
            margin-left: 10px; /* Marge entre les liens de la barre de navigation à droite */
        }

        .navbar-toggler {
            border: none; /* Suppression de la bordure du bouton d'ouverture de menu */
        }

        .dropdown-menu {
            background-color: #f8f9fa; /* Couleur de fond du menu déroulant */
            border: 1px solid #dee2e6; /* Bordure */
        }

        .dropdown-item {
            color: #343a40 !important; /* Couleur du texte des éléments de menu déroulant */
        }

        .dropdown-item:hover {
            background-color: #e5e4e4da; /* Couleur de fond au survol */
        }

        .dropdown-divider {
            border-top: 1px solid #dee2e6; /* Bordure de séparation */
        }

        .py-4 {
            padding-top: 4rem !important; /* Espacement haut */
            padding-bottom: 4rem !important; /* Espacement bas */
        }

        /* Style pour le bouton de logout */
        #navbarDropdown {
            color: #fafafa !important; /* Couleur rouge pour le texte */
        }
        #navbarDropdown:hover{
            color: #eaeaea !important;         }

        /* Style pour les liens de logout */
        .dropdown-item.logout-link {
            color: #ff0000 !important; /* Couleur rouge pour le texte */
        }

        /* Style pour les liens de login */
        .navbar-nav .login-link {
            color: #fafafa !important; /* Couleur bleue pour le texte */
        }

        /* Style the cards */
        .card {
            width: 150px;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .card {
    width: 180px; /* Largeur de la carte */
    height: 320px; /* Hauteur de la carte */
    margin: 20px; /* Espace autour de chaque carte */
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.card img {
    max-width: 100%; /* Pour que l'image s'adapte à la largeur de la carte */
}

/* Style de la classe parente pour centrer les cartes */
.align-items-center {
    display: flex;
    align-items: center;
    justify-content: center;
}


        .card:hover {
            transform: translateY(-5px);
        }

        .card-body {
            padding: 1rem;
        }

        .card-title {
            font-size: 14px;
        }


    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a href="/home" style="text-decoration: none;">
                <span style="color: #FFD700; font-size: 24px; font-weight:bold;">Book</span><span style="color: #FFA500; font-size: 24px; font-weight:bold;">Mooch</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('books.create') }}">Add Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('books.mybooks') }}">My Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('allbooks') }}">All Books</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link login-link" href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link login-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile Management</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item logout-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h3 class="text-center mb-4">My Books</h3>
        <div class="row justify-content-center align-items-center">
            @foreach ($books as $index => $book)
                <div class="col-md-2 col-sm-4 mb-3">
                    <a href="{{ route('books.show', ['book' => $book->id]) }}" style="text-decoration: none; color: inherit;">
                        <div class="card">
                            <img src="{{ asset('images/' . $book->cover_image) }}" alt="{{ $book->title }}" class="card-img-top" style="width: 150px; height: 224px;">
                            <div class="card-body">
                                <div style="height: 50px; overflow: hidden;">
                                    <h5 class="card-title">{{ $book->title }}</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @if (($index + 1) % 5 == 0)
                    <div class="w-100"></div>
                @endif
            @endforeach
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
