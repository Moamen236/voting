@extends('layout')

@section('title' , 'Register')

@section('content')
    <div class="card py-4">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    @include('includes.messages')
                    <h3 class="mb-4">Create a new account</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email"> 
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="password confirmation" class="form-label">Password confirmation</label>
                            <input type="password" class="form-control" id="password confirmation" name="password_confirmation">
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection