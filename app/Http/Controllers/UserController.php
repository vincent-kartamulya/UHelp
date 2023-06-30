<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function SignUp(Request $request){
        // $email = $request->input('EmailAddress');
        // $Password = $request->input('Password');
        // $verif = $request->input('VerifyPassword');
        $validasi = $request->validate([
            'EmailAddress' => 'required|email',
            'Password' => 'required|min:8',
            'VerifyPassword'=>'required|same:Password'
        ]);
        $user = new User();
        $user->email = $validasi['EmailAddress'];
        $user->password = $validasi['Password'];
        $user->save();
        return redirect('/login');
    }

    public function authentication(Request $request){
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        if(Auth::attempt($validate)){
            dd($validate);
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        else{
            dd($validate);
            // return back()->with('LogInError',"Login error!");
        }
        // return redirect('/');
    }

    // public function authentication(Request $request)
    // {
    // $credentials = $request->validate([
    //     'email' => 'required|email',
    //     'password' => 'required|min:8'
    // ]);

    // // Retrieve the user based on the email
    // $user = User::where('email', $credentials['email'])->first();

    // if ($user && Hash::check($credentials['password'], $user->password)) {
    //     // Credentials are valid, log in the user
    //     Auth::login($user);

    //     $request->session()->regenerate();
    //     return redirect()->intended('/home');
    // } else {
    //     // Credentials are invalid
    //     return back()->with('LogInError', "Login error!");
    // }
    // }

}
