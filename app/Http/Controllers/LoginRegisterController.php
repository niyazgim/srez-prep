<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginRegisterController extends Controller
{
    public function index() {
        return view('pages.login');
    }

    public function create() {
        return view('pages.signup');
    }

    public function store(SignupRequest $request) {
        $credentials = $request->only('email','password');
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'role_id' => 2,
        ]);
        Auth::attempt($credentials, true);
        $request->session()->regenerate();
        return redirect()->route('home');
    }
    public function update(LoginRequest $request) {
        $credentials = $request->only('email','password');
        Auth::attempt($credentials, true);
        $request->session()->regenerate();
        return redirect(route('home'));
    }
    public function destroy()
    {
        Auth::logout();
        return redirect(route('home'));
    }

}
