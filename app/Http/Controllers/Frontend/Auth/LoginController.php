<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('frontend.auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required',
        ]);

        auth()->attempt($request->only('email', 'password'));

        return to_route('user.dashboard');
    }

    public function destroy(Request $request)
    {
        auth()->logout();
        return to_route('home');
    }
}
