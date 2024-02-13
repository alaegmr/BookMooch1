@extends('layouts.app')

@section('content')
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
            background-color: #15414F;
            border-bottom: 1px solid #dee2e6;
            padding: 10px 0;
        }

        .navbar-brand img {
            max-height: 40px;
        }

        .nav-link {
            color: #fafafa !important;
            font-weight: bold;
        }

        .nav-link:hover {
            color: #f0ff7c !important;
        }

        .navbar-nav.ml-auto .nav-link {
            margin-left: 10px;
        }

        .navbar-toggler {
            border: none;
        }

        .dropdown-menu {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
        }

        .dropdown-item {
            color: #343a40 !important;
        }

        .dropdown-item:hover {
            background-color: #e5e4e4da;
        }

        .dropdown-divider {
            border-top: 1px solid #dee2e6;
        }

        .py-4 {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
        }

        #navbarDropdown {
            color: #fafafa !important;
        }
        #navbarDropdown:hover{
            color: #eaeaea !important;
        }

        .dropdown-item.logout-link {
            color: #ff0000 !important;
        }

        .navbar-nav .login-link {
            color: #fafafa !important;
        }

        .card {
            width: 180px;
            height: 320px;
            margin: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card img {
            max-width: 100%;
        }

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

        /* Styles for navigation arrows */
        .navigation-arrows {
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            width: 30px;
            height: 30px;
            background-color: #f8f9fa;
            border: 1px solid #ccc;
            border-radius: 50%;
            text-align: center;
            cursor: pointer;
        }

        .navigation-arrows:hover {
            background-color: #e9ecef;
        }

        .navigation-arrow-left {
            left: 35vh;
        }

        .navigation-arrow-right {
            right: 20vh;
        }

    </style>
</head>
<body>

    <!-- Sidebar
    <div class="sidebar">
        <h3>Search Bar</h3>
        <form>
            <input type="text" placeholder="Search...">
            <button type="submit">Search</button>
        </form>
    </div>
-->
    <!-- Main content -->
    <div class="container main-content" style="margin-left: 250px;">
        <h1 class="text-center mb-4"></h1>
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

    <!-- Navigation arrows -->
    <div class="navigation-arrows navigation-arrow-left" onclick="navigateBooks('prev')">&#10094;</div>
    <div class="navigation-arrows navigation-arrow-right" onclick="navigateBooks('next')">&#10095;</div>

    <script>
        function navigateBooks(direction) {
            const scrollDistance = 560; // Adjust this value to change the scroll distance
            const container = document.querySelector('.main-content');

            if (direction === 'prev') {
                container.scrollLeft -= scrollDistance;
            } else {
                container.scrollLeft += scrollDistance;
            }
        }
    </script>
</body>
</html>
@endsection
