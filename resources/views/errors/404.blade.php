@extends('layout.master')

@section('title', 'Page Not Found')

@section('content')
<style>
    body {
        background: #f8f9fa; /* light gray background */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .error-container {
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: #343a40;
    }

    .error-code {
        font-size: 10rem;
        font-weight: 700;
        color: #f00; /* red color for 404 */
    }

    .error-message {
        font-size: 2rem;
        margin-bottom: 20px;
    }

    .error-description {
        font-size: 1.2rem;
        color: #6c757d;
        margin-bottom: 30px;
    }

    .btn-home {
        background: #007bff;
        color: #fff;
        padding: 12px 30px;
        font-size: 1rem;
        border-radius: 5px;
        text-decoration: none;
        transition: background 0.3s;
    }

    .btn-home:hover {
        background: #0056b3;
        color: #fff;
    }

    /* Optional: subtle floating animation */
    .error-code {
        animation: float 2s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }
</style>

<div class="error-container">
    <div class="error-code">404</div>
    <div class="error-message">Oops! Page Not Found.</div>
    <div class="error-description">Sorry, the page you are looking for does not exist.</div>
    <a href="{{ url('/') }}" class="btn-home">Go to Homepage</a>
</div>
@endsection
