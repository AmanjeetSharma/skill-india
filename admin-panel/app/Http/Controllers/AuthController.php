<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Check if user is logged in and redirect accordingly
    public function isLoggedIn()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        } else {
            return redirect('/login');
        }
    }

    public function dashboard()
    {
        return view('dashboard.index');
    }

    // Show the login page
    public function login()
    {
        return view('login.index');
    }

    // Handle login form submission
    public function loginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('error', 'Invalid credentials.');
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
