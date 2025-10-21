<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller {

        public function showRegister() {
            return view('auth.register');
        }

        public function showLogin() {
            return view('auth.login');
        }

        public function register(Request $request) {
            $validated = $request->validate([   // validate returns key value pairs
                'name' => 'required|string|max:255',
                'email' => 'required|string|unique:users',
                'password' => 'required|string|min:8|confirmed'
                // confimation requires password_confirmation field password auto hashed
            ]);

            $user = User::create($validated);

            Auth::login($user);

            return redirect()->route('home');
        }

        public function login() {

        }
}
