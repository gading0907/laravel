<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50',
            'email' => 'required|string|email|max:100|unique:users', // Ganti 'unique:user' ke 'unique:users'
            'password' => [
                'required',
                'string',
                'min:7', // Ganti minimal 6 menjadi 7
                'confirmed'
            ],
        ], [
            // Custom error message
            'password.min' => 'Minimal password yang dibuat adalah 7 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak sesuai.',
        ]);
    
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }
    

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }
    
        // Jika login gagal, kirim pesan error "Kata sandi salah"
        return back()->withErrors([
            'password' => 'Kata sandi salah.',
        ])->withInput($request->only('email')); // Agar email tetap diisikan kembali
    }
    
    
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }

    public function home()
    {
        return view('home');
    }
}

