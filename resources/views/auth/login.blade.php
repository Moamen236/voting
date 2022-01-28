@extends('layout')

@section('title' , 'login')

@section('content')
    
    <div id="login">
        <div class="container">
            @include('includes.messages')
            <div class="login bg-white rounded shadow">
                <div class="login-body">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="voting text-center">
                                <span class="material-icons"> how_to_vote </span>
                                <h1 class="text-center">Voting System</h1>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form py-5 px-4">
                                <h3 class="mb-5">Login to your account</h3>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email"> 
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="remember">
                                        <label class="form-check-label" for="remember" name="remember">Remember Me</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn float-end text-uppercase text-white">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection