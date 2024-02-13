@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Book</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>

                        <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" class="form-control" id="author" name="author" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="genre">Genre</label>
                            <input type="text" class="form-control" id="genre" name="genre">
                        </div>

                        <div class="form-group">
                            <label for="publication_year">Publication Year</label>
                            <input type="text" class="form-control" id="publication_year" name="publication_year">
                        </div>

                        <div class="form-group">
                            <label for="language">Language</label>
                            <input type="text" class="form-control" id="language" name="language">
                        </div>

                        <div class="form-group">
                            <label for="ISBN">ISBN</label>
                            <input type="text" class="form-control" id="ISBN" name="ISBN">
                        </div>
                        <div class="form-group">
                            <label for="cover_image">Cover Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="cover_image" name="cover_image" aria-describedby="inputGroupFileAddon">
                                    <label class="custom-file-label" for="cover_image">Choose file</label>
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="availability_status">Availability Status</label>
                            <input type="text" class="form-control" id="availability_status" name="availability_status">
                        </div>

                        <div class="form-group">
                            <label for="added_date">Added Date</label>
                            <input type="date" class="form-control" id="added_date" name="added_date">
                        </div>

                        <button type="submit" class="btn btn-primary" id="x">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
