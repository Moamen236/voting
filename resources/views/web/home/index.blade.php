@extends('layout')

@section('title', 'Home')

@section('content')
    <div id="home">
        <div class="home bg-white rounded shadow text-center py-5 px-4">
            <div class="home-body">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="image">
                            <img src="{{ asset('images/bg.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info d-flex flex-column justify-content-center align-items-center h-100">
                            <h1>Voting System</h1>
                            @auth
                                <h5>Welcome {{ auth()->user()->name }}</h5>
                            @endauth
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam deleniti culpa magnam soluta consequatur aliquam eos doloribus doloremque quis nam? </p>
                            @auth  
                                @if(auth()->user()->role->name === 'user')
                                    <a class="btn text-white text-uppercase" aria-current="page" href="{{ route('vote.index') }}"> go to Vote</a>
                                @endif
                                @if(auth()->user()->role->name === 'admin')
                                    <div class="row">
                                        <div class="col">
                                            <a class="btn text-white text-uppercase" href="{{ route('user.index') }}">Users</a>
                                        </div>
                                        <div class="col">
                                            <a class="btn text-white text-uppercase" href="{{ route('user.create') }}">Add new user</a>
                                        </div>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection