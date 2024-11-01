@extends('layout.app')

@section('content')

<div class="container">
    <h2 class="mt-5">Register</h2>
    <form  action="{{ route('register') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name" required>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="form-group">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword"  name="confirm_password" placeholder="Confirm your password" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

@endsection
