<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create()
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {
        $request->validate( [
            'name' => ['required','string','max:255'],
            'surname' => ['required','string','max:255'],
            'username' => ['required','string','lowercase', 'max:255', 'unique:users,username'],
            'password' => ['required','confirmed', Password::defaults()],
        ]);

        $user = User::create([
        'name'=> $request->name,
        'surname'=> $request->surname,
        'username'=> $request->username,
        // 'password'=> bcrypt($request->password),
        'password'=> Hash::make($request->password),
        ]);

        $user->save();

        // dd($user);

        event(new Registered($user));
        Auth::login($user);

        return to_route('home');
    }
}
