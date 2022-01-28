<?php

namespace App\Http\Controllers\web;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class VoteController extends Controller
{
    public function index()
    {
        $role_id = Role::where('name', '=', 'user')->first()->id;
        $data['users'] = User::where('role_id', '=', $role_id)
            ->where('id', '<>', auth()->user()->id)
            ->get();
        return view('web.vote.index')->with($data);
    }

    public function store(Request $request)
    {
        $votes = $request->vote;

        foreach ($votes as $id) {
            $user = User::findOrFail($id);
            $user->number_of_votes += 1;
            $user->update();
        }

        $current_user = User::findOrFail(Auth::id());
        $current_user->is_vote = true;
        $current_user->update();

        return redirect()->route('vote.index')->with('success', 'Thank you for voting');
    }
}