@extends('layouts.guest')

@section('title', 'Login')

@section('content')
    <h2>Login</h2>

    @if (session('success'))
        <div class="auth-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('login.store') }}">
        @csrf

        <div class="auth-field">
            <label for="email">Email Address</label>
            <input
                type="email"
                name="email"
                id="email"
                value="{{ old('email') }}"
                placeholder="you@example.com"
                autocomplete="username"
                required
                autofocus
            >
            @error('email')
                <div class="auth-error">{{ $message }}</div>
            @enderror
        </div>

        <div class="auth-field">
            <label for="password">Password</label>
            <input
                type="password"
                name="password"
                id="password"
                placeholder="Enter your password"
                autocomplete="current-password"
                required
            >
            @error('password')
                <div class="auth-error">{{ $message }}</div>
            @enderror
        </div>

        <div class="auth-field">
            <label class="auth-checkbox-row">
                <input type="checkbox" name="remember" class="auth-checkbox"> Remember me
            </label>
        </div>

        <button type="submit" class="auth-button">Login</button>
    </form>

    <div class="auth-link">Don't have an account? <a href="{{ route('register') }}">Register</a></div>
@endsection