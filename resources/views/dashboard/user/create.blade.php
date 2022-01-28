@extends('layout')

@section('title', 'Add New User')

@section('content')
    <div id="add_new">
        <div class="container">
            <div class="card">
                <h5 class="card-header bg-white p-3">Add new user</h5>
                <div class="card-body py-4">
                    @include('includes.messages')
                    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter a Name" required>
                            </div>
                            <div class="col">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter an email" required>
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col">
                                <label class="form-label">Password</label>
                                <div class="input position-relative">
                                    <input type="password" class="form-control" name="password" placeholder="Enter a password">
                                    <span id="icon" class="position-absolute" style="top: 5px; right: 10px; cursor:pointer">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col">
                                <label class="form-label">Image</label>
                                <input  type="file" class="form-control" name="image">
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <label class="form-label">Role</label>
                                <select class="form-select" name="role_id">
                                    <option value="">Select a Role</option>
                                    <option value="1">Admin</option>
                                    <option value="2" selected>User</option>
                                </select>
                            </div>
                            <div class="col align-self-end">
                                <button type="submit" class="btn bg-blue text-white float-end">Add</button>
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