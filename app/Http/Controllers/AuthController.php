<?php
namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function processLogin(LoginRequest $request)
    {
        $validatedData = $request->validated();
        
        // Attempt to authenticate the user
        if (Auth::attempt($validatedData)) {
            // Authentication passed
            return redirect('/dashboard');
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['Invalid credentials.']);
        }
    }

    public function processRegister(RegisterRequest $request)
    {
        $validatedData = $request->validated();
        
        // Create a new user record
        User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Redirect to a specific page after successful registration
        return redirect('/dashboard');
    }
}
