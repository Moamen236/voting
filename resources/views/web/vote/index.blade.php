@extends('layout')

@section('title', 'Voting')

@section('content')
    <div class="head text-center mb-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Voting</h1>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam deleniti culpa magnam soluta consequatur aliquam eos doloribus doloremque quis nam? </p>
            </div>
        </div>
    </div>
    <form action="">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="vote" name="vote">
                            <label class="form-check-label" for="vote">
                                Vote for him
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <button type="button" class="btn btn-primary float-end" style="width:fit-content">Submit Vote</button>
            </div>
        </div>
    </form>
@endsection