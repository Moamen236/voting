@extends('layout')

@section('title', 'Add New User')

@section('content')
<div id="edit">
    <div class="container">
        <div class="card">
            <h5 class="card-header bg-white p-3">Add new user</h5>
            <div class="card-body">
                @include('includes.messages')
                <form action="{{ route('user.update' , $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row justify-content-center g-3 mb-2">
                        <div class="col-md-3">
                            @if($user->image)
                                <img src="{{ asset("$user->image") }}" alt="{{ $user->name }}" class="img-fluid rounded">
                            @else
                                <img src="{{ asset('images/user.jpg') }}" alt="{{ $user->name }}" class="img-fluid rounded">
                            @endif
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Image</label>
                            <input  type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="col">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col">
                            <label class="form-label">Role</label>
                            <select class="form-select" name="role_id">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}" {{ $role->id == $user->role_id ? 'selected' : '' }}>{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col align-self-end">
                            <button type="submit" class="btn bg-blue text-white float-end">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        $('#icon').click(function () {
            var input = $('input[type="password"]');

            if (input.attr('type') === 'password') {
                input.attr('type', 'text');
                console.log('if');
            } else {
                input.attr('type', 'password');
                console.log('else');
            }
        });
    </script>
    
@endsection