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
        $user->password = bcrypt($validasi['Password']);
        $user->save();
        return redirect('/login');
    }

    public function authentication(Request $request){
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        if(Auth::attempt($validate)){
            // dd($validate);
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        else{
            dd($validate);
            // return back()->with('LogInError',"Login error!");
        }
        // return redirect('/');
    }

    public function Loggingout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


    public function profileedit(Request $request) {
        $verif=$request->input([
            'name','BINUSId','Position','imageprofile'
        ]);
        
        // return $request->file('imageupload')->store('profile-picture');
        // dd($request);
    }
}
