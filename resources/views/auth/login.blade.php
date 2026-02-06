@extends('layout')

@section('pageContent')
    <div class="auth-wrapper">
        <form method="POST" action="/login" class="auth-card">
            @csrf

            <h2>Welcome Back</h2>

            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>

            <p class="auth-link">
                Don’t have an account?
                <a href="/register">Register</a>
            </p>
        </form>
    </div>
@endsection
