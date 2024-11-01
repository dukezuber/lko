@extends('layout.app')

@section('content')

<div class="container">
    <h2 class="mt-5">Login</h2>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <div class="mt-3">
        <p>Don't have an account? <a href="{{ route('register') }}">Register here</a>.</p>
    </div>
</div>

@endsection
