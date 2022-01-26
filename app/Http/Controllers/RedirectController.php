<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function index()
    {
        $role = auth()->user()->role->name;
        if ($role === 'user') {
            return redirect()->route('vote.home');
        } elseif ($role === 'admin') {
            return redirect()->route('user.index');
        }
    }
}