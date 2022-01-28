@extends('layout')

@section('title', 'Voting')

@section('content')
    <div id="vote">
        <div class="head text-center mb-3">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h1>Voting</h1>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam deleniti culpa magnam soluta consequatur aliquam eos doloribus doloremque quis nam? </p>
                </div>
            </div>
        </div>
        @include('includes.messages')
        <form id="store_votes" action="{{ route('vote.store') }}" method="POST">
            <input id="is_vote" type="hidden" name="is_vote" value="{{ auth()->user()->is_vote }}">
            @csrf
            <div class="row">
                @foreach ($users as $user)
                    <div class="col-md-4">
                        <div class="person rounded shadow bg-white text-center p-4 mb-4">
                            <div class="image">
                                @if($user->image != null)
                                    <img src="{{ asset("$user->image") }}" class="" alt="user">
                                @else
                                    <img src="{{ asset('images/user.jpg') }}" class="" alt="user">
                                @endif  
                            </div>
                            <div class="info mt-4">
                                <h5>{{ $user->name }}</h5>
                                <p>{{ $user->email }}</p>
                            </div>
                            <div class="vote">
                                <div class="form-check">
                                    <input class="form-check-input d-none" type="checkbox" value="{{ $user->id }}" id="vote_{{ $user->id }}" name="vote[]">
                                    <label class="form-check-label btn w-100" for="vote_{{ $user->id }}">
                                        <i class="fas fa-vote-yea"></i> Vote
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-md-4">
                    <button id="store_btn" type="button" class="btn w-100">Submit Vote</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script>
        
        let form = document.getElementById('store_votes');
        let is_vote = document.getElementById('is_vote');
        let check_inputs = Array.from(document.querySelectorAll('.form-check-input'));
        let btn = document.getElementById('store_btn');
        let checked = [];

        check_inputs.forEach(input => {
            input.addEventListener('click', function() {
                if(this.checked) {
                    this.nextElementSibling.classList.add('active-check');
                }else{
                    this.nextElementSibling.classList.remove('active-check');
                }
            });
        });

        btn.addEventListener('click' , function(e){
            e.preventDefault();
            check_inputs.forEach(input => {
                if(input.checked == true){
                    if(checked.includes(input) == false){
                        checked.push(input);
                    }
                }else{
                    if(checked.includes(input) == true){
                        checked.splice(checked.indexOf(input), 1);
                    }
                }
            });

            console.log(checked);
            if(is_vote.value == 1){
                Swal.fire({
                    icon: 'error',
                    title: 'You already voted before!',
                });
            }else if(checked.length == 0){
                Swal.fire({
                    icon: 'error',
                    title: 'Please select at least one!',
                });
            }else if(checked.length > 5 ){
                Swal.fire({
                    icon: 'error',
                    title: 'You have just choose less than 5!',
                })
            }else{
                form.submit();
            }
        })

    </script>
@endsection