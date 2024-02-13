@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update Profile Information') }}</div>

                    <div class="card-body">
                        <!-- Update Profile Information Form -->
                        <form method="POST" action="{{ route('profile.edit') }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autocomplete="name">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autocomplete="email">
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Update Profile') }}</button>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">{{ __('Update Password') }}</div>

                    <div class="card-body">
                        <!-- Update Password Form -->
                        <form method="POST" action="{{ route('profile.update.password') }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="current_password" class="form-label">{{ __('Current Password') }}</label>
                                <input id="current_password" type="password" class="form-control" name="current_password" required autocomplete="current-password" placeholder="Your current password">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('New Password') }}</label>
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="New password">
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">{{ __('Confirm New Password') }}</label>
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm new password">
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Update Password') }}</button>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">{{ __('Delete Account') }}</div>

                    <div class="card-body">
                        <!-- Delete Account Form -->
                        <form method="POST" action="{{ route('profile.destroy') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Enter your password">
                            </div>

                            <button type="submit" class="btn btn-danger">{{ __('Delete Account') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
