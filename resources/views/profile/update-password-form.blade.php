@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update Password') }}</div>

                    <div class="card-body">
                        <!-- Update Password Form -->
                        <form method="POST" action="{{ route('profile.update.password') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="current-password" class="form-label">{{ __('Current Password') }}</label>
                                <input id="current-password" type="password" class="form-control" name="current_password" required autocomplete="current-password">
                            </div>

                            <div class="mb-3">
                                <label for="new-password" class="form-label">{{ __('New Password') }}</label>
                                <input id="new-password" type="password" class="form-control" name="password" required autocomplete="new-password">
                            </div>

                            <div class="mb-3">
                                <label for="password-confirm" class="form-label">{{ __('Confirm New Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Update Password') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
