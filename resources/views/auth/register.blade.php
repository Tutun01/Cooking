@extends('layout')

@section('pageContent')
    <div class="auth-wrapper">
        <form method="POST" action="/register" class="auth-card">
            @csrf

            <h2>Create Account</h2>

            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

            <button type="submit">Register</button>

            <p class="auth-link">
                Already have an account?
                <a href="/login">Login</a>
            </p>
        </form>
    </div>
@endsection
