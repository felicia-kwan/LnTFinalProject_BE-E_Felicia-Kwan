@extends('layouts.app')

@section('judul', 'Register')

@section('style')
<link rel="stylesheet" href="{{asset('css/registration.css')}}">
@endsection

@section('content')
<section id="Register">
    <div class="register-bg"></div>
    <div class="register-content">
        <div class="register-heading">
            <h1>Welcome to</h1>
            <h1 id="bottom-heading">Toko Meiying <span>!</span></h1>
        </div>
        <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="register-form">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="register-input">
                    <label for="name">Full Name</label>
                    <br>
                    <input id="name" type="text" name="name">
                </div>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="register-input">
                    <label for="email">Email</label>
                    <br>
                    <input id="email" type="email" name="email">
                </div>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="register-input">
                    <label for="password">Password</label>
                    <br>
                    <input id="password" type="password" name="password">
                </div>
                @error('telephone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="register-input">
                    <label for="telephone">Telephone</label>
                    <br>
                    <input id="telephone" type="text" name="telephone">
                </div>
                <div class="register-bottom">
                    <p>Already have an account? <span><a href="">Log in</a></span></p>
                    <button class="submitBtn" type="submit">Create Account</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
