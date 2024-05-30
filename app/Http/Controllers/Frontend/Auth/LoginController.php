<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
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

        $user = User::where('email', $request->email)->first();

        if (!$user || !$user->hasRole('user') || !auth()->attempt($request->only('email', 'password'))) {
            return back()->with('error', 'Invalid credentials');
        }

        return to_route('user.dashboard');
    }

    public function destroy(Request $request)
    {
        auth()->logout();
        return to_route('home');
    }
}
