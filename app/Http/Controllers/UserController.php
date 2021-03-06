<?php

namespace App\Http\Controllers;

Use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users'));
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        return "Procesando info...";
    }
}
