<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BookMooch</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyCGpNGNZ4eFZDuhad0K2a1V0pEFQMpuU" crossorigin="anonymous">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #15414F;
; /* Couleur de fond grise */
            font-family: 'figtree', sans-serif;

        }

        .auth-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .intro-box {
            max-width: 800px;
            padding: 30px;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .auth-link {
            font-weight: 600;
            padding: 0.5rem 1rem;
            text-decoration: none;
            transition: all 0.3s ease;
            color: #ffffff;
            background-color: #10B981;
            border-radius: 8px;
            display: inline-block;
        }

        .auth-link:hover {
            background-color: #047857;
        }

        .auth-link:focus {
            outline: 2px solid #34D399;
        }
        .custom-btn {
        font-weight: 600;
        padding: 0.5rem 1rem;
        text-decoration: none;
        transition: all 0.3s ease;
        color: #000000;
        background-color: #f2ff8c

;
        border-radius: 8px;
        display: inline-block;
    }

    .custom-btn:hover {
        background-color: #;
    }

    .custom-btn:focus {
        outline: 2px solid #;
    }
    </style>
</head>
<body class="antialiased">
 <!-- Contenu de la page d'accueil -->
<div class="auth-container">
    <div class="intro-box">
        <h1 class="text-3xl font-bold mb-4">Welcome to <a href="{{ url('/home') }}" class="text-lg font-bold" style="text-decoration: none;">
            <span style="color: #FFD700;">Book</span><span style="color: #FFA500;">Mooch</span>
        </a></h1>



        <!-- Bloc "How It Works" -->
        <div class="bg-gray-100 p-6 rounded-md mb-6">
            <h2 class="text-xl font-semibold mb-2">How It Works</h2>
            <p class="text-gray-700">
                BookMooch makes book exchanging easy and fun! Follow these simple steps to get started:
            </p>
            <ol class="list-decimal ml-6 mt-4 text-gray-700">
                <li>List the books you want to give away on your Bookshelf.</li>
                <li>Other members can request your books, and you'll earn points when you send them.</li>
                <li>Use your earned points to request books from other members.</li>
                <li>Receive books from fellow BookMoochers and enjoy your new reads!</li>
            </ol>
        </div>

        <p class="text-gray-700">
            BookMooch encourages a culture of generosity and reading, fostering a global community of book enthusiasts.
        </p>

        @if (Route::has('login'))
        <div class="mt-8">
            @auth
                <a href="{{ url('/home') }}" class="custom-btn">Home BookMooch</a>
            @else
                <a href="{{ route('login') }}" class="custom-btn">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 custom-btn">Register</a>
                @endif
            @endauth
        </div>
    @endif
    </div>
</div>
</body>
</html>
