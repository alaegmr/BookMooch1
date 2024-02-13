<!-- resources/views/books/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $book->title }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('images/' . $book->cover_image) }}" alt="{{ $book->title }}" class="img-thumbnail" style="max-width: 150px;">
                            </div>
                            <div class="col-md-8">
                                <p><strong>Title:</strong> {{ $book->title }}</p>
                                <p><strong>Author:</strong> {{ $book->author }}</p>
                                <p><strong>Description:</strong> {{ $book->description }}</p>
                                <p><strong>Genre:</strong> {{ $book->genre }}</p>
                                <p><strong>Publication Year:</strong> {{ $book->publication_year }}</p>
                                <p><strong>Language:</strong> {{ $book->language }}</p>
                                <p><strong>ISBN:</strong> {{ $book->ISBN }}</p>
                                <p><strong>Availability Status:</strong> {{ $book->availability_status }}</p>
                                <a href="{{ route('allbooks') }}" class="btn btn-primary">Back to All Books</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
