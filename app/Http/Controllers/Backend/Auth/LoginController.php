<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('backend.auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !$user->hasRole('admin') || !auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('error', 'Invalid Credentials');
        }

        return redirect()->route('admin.dashboard');
    }


    public function destroy()
    {
        auth()->logout();
        return redirect()->route('home');
    }
}
