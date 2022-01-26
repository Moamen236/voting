@extends('layout')

@section('title' , 'login')

@section('content')
    <div class="card p-5">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h3 class="mb-4">Login to your account</h3>
                    <form method="POST" action="{{ route('login') }}">
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
                        <button type="submit" class="btn btn-primary float-end">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection