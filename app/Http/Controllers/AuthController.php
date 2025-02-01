<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;  // Import the Hash facade
use App\Models\User;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login form submission
    public function login(Request $request)
    {
        // Validate the credentials
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|string',
            'password' => 'required|string',
        ]);

        // If validation fails, return back with errors
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redirect to profile page after successful login
            return redirect()->route('profile');
        }

        // If credentials are incorrect, return back with error
        return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
    }

    // Show the registration form
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Handle the registration form submission
    public function register(Request $request)
    {
        // Validate the registration form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // If validation fails, return back with errors
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Create a new user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);  // Hashing the password before saving
        $user->save();

        // Optionally, log the user in immediately after registration
        Auth::login($user);

        // Redirect to the profile page
        return redirect()->route('profile');
    }
}
