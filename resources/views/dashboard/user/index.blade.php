@extends('layout')

@section('title', 'Users')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-4">
                    <h4 class="card-title">Users</h4>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-primary float-end btn-sm">Add new</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover table-striped">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Number of voting</th>
                        <th scope="col">Note</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td> <img src=".." alt="user"> </td>
                        <td>5</td>
                        <td>on</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection