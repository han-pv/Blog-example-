<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::with('posts')
        ->take(2)
        ->get();

        return view("home.index", compact("users"));
    }
}
