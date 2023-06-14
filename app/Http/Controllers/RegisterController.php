<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function Register()
    {
        return view('Register');
    }

    public function RegisterAccount(Request $request)
    {
        return redirect('/register')->with('success', 'Post Updated');
    }

    
}
