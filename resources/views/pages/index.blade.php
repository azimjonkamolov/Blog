@extends('layouts.app')
    @section('content')
        <div class="jumbotron text-center">
            <h1>Welcome To Laravel!</h1>
            <p>This is the laravel application from the "Laravel From Scratch" YouTube series</p>
            <p><a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Login</a> <a class="btn btn-success btn-lg" href="{{ route('register') }}" role="button">Register</a></p>
        </div>
    @endsection




    
