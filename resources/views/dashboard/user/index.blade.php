@extends('layout')

@section('title', 'Users')

@section('content')
    <div id="users">
        <div class="card">
            @include('includes.messages')
            <div class="card-header bg-white p-3">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-4">
                        <h4 class="card-title">Users</h4>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('user.create') }}" class="btn bg-blue text-white float-end">Add new</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Votes number</th>
                            <th scope="col">Is vote ?</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td class="image"> 
                                    @if($user->image)
                                        <img src="{{ asset("$user->image") }}" alt="user" class="rounded-circle me-2"> 
                                    @else
                                        <img src="{{ asset("images/user.jpg") }}" alt="user" class="rounded-circle me-2">
                                    @endif
                                    {{ $user->name }}
                                </td>
                                <td>{{ $user->number_of_votes ?? 0 }}</td>
                                <td>
                                    @if ($user->is_vote == true)
                                        <span class="badge bg-green">Yes</span>
                                    @else
                                        <span class="badge bg-red">No</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('user.edit' , $user->id) }}" class="btn bg-blue text-white btn-sm"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('user.destroy' , $user->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                        <button type="submit" class="btn bg-red text-white btn-sm"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="paginate float-end">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection