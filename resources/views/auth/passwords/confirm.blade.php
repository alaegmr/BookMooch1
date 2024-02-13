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
            width: 400px;
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
            white-space: nowrap; /* Pour empêcher le saut de ligne dans le bouton */
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
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email address">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password">
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Reset Password') }}</button>
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
