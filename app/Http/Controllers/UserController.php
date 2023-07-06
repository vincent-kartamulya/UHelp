<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Toastr;

class UserController extends Controller
{
    public function SignUp(Request $request){
        // $email = $request->input('EmailAddress');
        // $Password = $request->input('Password');
        // $verif = $request->input('VerifyPassword');
        $validasi = $request->validate([
            'EmailAddress' => 'required|email',
            'Password' => 'required|min:8',
            'VerifyPassword'=>'required|same:Password',
        ]);
        $validasi = $request->validate([
            'EmailAddress' => 'unique:users,email',
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
        $verif = [
            'name' => $request->input('name'),
            'BINUSId' => $request->input('BINUSId'),
            'Position' => $request->input('Position'),
            'imageprofile' => null
        ];

        if ($request->file('imageprofile')) {
            $path = $request->file('imageprofile')->store('profile-picture', 'public');
            $verif['imageprofile'] = $path;
        }

        $punya = User::find(auth()->user()->id);
        $punya->name = $verif['name'];
        $punya->BINUSId = $verif['BINUSId'];
        $punya->Position = $verif['Position'];
        $punya->imageprofile = $verif['imageprofile'];
        $punya->save();
        return view('profile.profile',compact('punya'));
        // return $request->file('imageupload')->store('profile-picture');
        // dd($request);
    }

    public function openprofile(){
        $punya = User::find(auth()->user()->id);
        return view('profile.profile',compact('punya'));
    }

}
