<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #fafafa; /* Couleur de fond */
        }

        .container {
            height: 100vh; /* Hauteur de la fenêtre */
            display: flex;
            justify-content: center; /* Centrage horizontal */
            align-items: center; /* Centrage vertical */
            margin-left: -10px;
        }

        .card {
            width: 470px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ombre légère */
        }

        .card-header {
            background-color: #f0f0f0; /* Couleur d'en-tête */
            border-bottom: none; /* Suppression de la bordure inférieure */
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #2c3e50; /* Couleur de texte */
        }

        .form-control {
            border-radius: 0; /* Suppression du bord arrondi */
        }

        .btn-primary {
            background-color: #f2ff8c; /* Couleur du bouton de connexion */
            border: none;
            width: 100%;
            color: #2c3e50; /* Couleur de texte */
            font-weight: bold;
            white-space: nowrap; /* Pour forcer le contenu à rester sur une seule ligne */
            margin-left: -48px;
        }

        .btn-primary:hover {
            background-color: #eefc84; /* Couleur du bouton au survol */
            color: #2c3e50; /* Couleur de texte */
        }

        .btn-link {
            color: #2c3e50; /* Couleur du lien de récupération de mot de passe */
        }

    </style>

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email address">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
