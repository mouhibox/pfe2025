<?php
// In ProfileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        // Return the profile view with the authenticated user
        return view('profile.show', [
            'user' => auth()->user(),
        ]);
    }

    // Other methods like edit, update, destroy...
}
