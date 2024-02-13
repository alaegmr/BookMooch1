@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Delete Account') }}</div>

                    <div class="card-body">
                        <!-- Delete User Form -->
                        <form method="POST" action="{{ route('profile.destroy') }}">
                            @csrf
                            @method('DELETE')

                            <div class="mb-3">
                                <label for="delete-password" class="form-label">{{ __('Enter Your Password to Confirm Account Deletion') }}</label>
                                <input id="delete-password" type="password" class="form-control" name="password" required autocomplete="current-password">
                            </div>

                            <button type="submit" class="btn btn-danger">{{ __('Delete My Account') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
