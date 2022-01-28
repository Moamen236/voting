@extends('layout')

@section('title' , 'Register')

@section('content')

@include('includes.messages')
<div id="register">
    <div class="container">
        <div class="register bg-white rounded shadow">
            <div class="register-body">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="voting text-center">
                            <span class="material-icons"> how_to_vote </span>
                            <h1 class="text-center">Voting System</h1>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form py-5 px-4">
                            <h3 class="mb-4">Create a new account</h3>
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
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
                                    <label class="form-label">Image</label>
                                    <input  type="file" class="form-control" name="image">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="password confirmation" class="form-label">Password confirmation</label>
                                    <input type="password" class="form-control" id="password confirmation" name="password_confirmation">
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn float-end text-uppercase text-white">register</button>
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