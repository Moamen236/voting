@extends('layout')

@section('title', 'Add New User')

@section('content')
    <div class="card">
        <h5 class="card-header">Add new user</h5>
        <div class="card-body">
            <form action="">
                <div class="row g-3 mb-3">
                    <div class="col">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Enter a Name" aria-label="name">
                    </div>
                    <div class="col">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Enter an email" aria-label="email">
                    </div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col">
                        <label class="form-label">Password</label>
                        <div class="input position-relative">
                            <input type="password" class="form-control" placeholder="Enter a Name" aria-label="name">
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
                        <select class="form-select" name="role">
                            <option value="">Select a Role</option>
                            <option value="1">Admin</option>
                            <option value="2" selected>User</option>
                        </select>
                    </div>
                    <div class="col align-self-end">
                        <button type="button" class="btn btn-primary float-end">Add</button>
                    </div>
                </div>
            </form>
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