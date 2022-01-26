<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index()
    {
        return view('web.vote.index');
    }

    public function strore(Request $request)
    {
        dd($request->all());
    }
}