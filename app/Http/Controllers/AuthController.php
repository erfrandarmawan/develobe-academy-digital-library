<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin(){
        return view('auth.login');
    }

    public function showRegister(){
        return view('auth.register');
    }

    public function showForgotPassword(){
        return view('auth.forgot-password');
    }

    public function handleLogin(Request $request){
        // Validate input
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Get email and password data
        $credentials = $request->only('email', 'password');

        // Check user
        if (Auth::attempt($credentials, $request->remember)) {
            // Generate session
            $request->session()->regenerate();

            // Redirect to panel user
            return redirect()->intended('/panel');
        }

        // Return to login page with error information if login failed
        return back()->withErrors([
            'email' => 'Email or password is incorrect.',
        ])->onlyInput('email');
    }

    public function handleRegister(Request $request){
        // Validate input
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:100', 'unique:users,email'],
            'password' => ['required', 'min:6'],
        ]);

        // Create user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'role' => 'user',
            'password' => Hash::make($validated['password']),
        ]);

        // Login automatically after register
        Auth::login($user);

        // Redirect to panel user
        return redirect('/panel');
    }

    public function handleLogout(Request $request){
        // Logout function
        Auth::logout();

        // Clear session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to login page
        return redirect('/login');
    }
}
