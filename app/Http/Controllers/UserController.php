<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;

class UserController extends Controller
{
    public function SignUp(Request $request){
        // $email = $request->input('EmailAddress');
        // $Password = $request->input('Password');
        $verif = $request->input('VerifyPassword');
        $validasi = $request->validate([
            'EmailAddress' => 'required|email',
            'Password' => 'required|min:8'
        ]);
        $user = new User();
        $user->email = $validasi['EmailAddress'];
        $user->password = $validasi['Password'];
        $user->save();
        return view('home');
    }

    public function authentication(Request $request){
        $validasi = $request->validate([
            'EmailAddress' => 'required|email',
            'Password' => 'required|min:8'
        ]);
        
    }
}
