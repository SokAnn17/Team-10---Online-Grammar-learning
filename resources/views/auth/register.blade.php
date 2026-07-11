@extends('layouts.guest')

@section('title', 'Register')

@section('content')
    <h2>Create Account</h2>

    <form method="POST" action="{{ route('register.store') }}">
        @csrf

        <div class="auth-field">
            <label for="full_name">Full Name</label>
            <input
                type="text"
                name="full_name"
                id="full_name"
                value="{{ old('full_name') }}"
                placeholder="Your full name"
                autocomplete="name"
                required
                autofocus
            >
            @error('full_name')
                <div class="auth-error">{{ $message }}</div>
            @enderror
        </div>

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
                placeholder="At least 8 characters"
                autocomplete="new-password"
                aria-describedby="password-hint"
                required
            >
            {{-- This hint is linked to the input above via aria-describedby,
                 so screen readers announce it together with the field. --}}
            <div class="auth-hint" id="password-hint">Must be at least 8 characters.</div>
            @error('password')
                <div class="auth-error">{{ $message }}</div>
            @enderror
        </div>

        <div class="auth-field">
            <label for="password_confirmation">Confirm Password</label>
            <input
                type="password"
                name="password_confirmation"
                id="password_confirmation"
                placeholder="Re-enter your password"
                autocomplete="new-password"
                required
            >
        </div>

        <button type="submit" class="auth-button">Register</button>
    </form>

    <div class="auth-link">Already have an account? <a href="{{ route('login') }}">Login</a></div>
@endsection