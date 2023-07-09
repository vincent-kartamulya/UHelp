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
        $validasi1 = $request->validate([
            'EmailAddress' => 'required|email',
            'Password' => 'required|min:8',
            'VerifyPassword'=>'required|same:Password',
        ]);
        $validasi = $request->validate([
            'EmailAddress' => 'unique:users,email',
        ]);
        $user = new User();
        $user->email = $validasi['EmailAddress'];
        $user->password = bcrypt($validasi1['Password']);
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
            'BINUSId' => $request->input('binusianID'),
            'Position' => $request->input('division'),
            'email' => $request->input('email'),
            'realname' => $request ->input('realName'),
            'phoneNumber'=> $request -> input('phoneNumber'),
            'imageprofile' => null
        ];

        if ($request->file('imageprofile')) {
            $path = $request->file('imageprofile')->store('profile-picture', 'public');
            $verif['imageprofile'] = $path;
        }

        $punya = User::find(auth()->user()->id);
        $punya->username = $verif['name'];
        $punya->BINUSId = $verif['BINUSId'];
        $punya->Position = $verif['Position'];
        $punya->email = $verif['email'];
        $punya->name = $verif['realname'];
        $punya->PhoneNumber = $verif['phoneNumber'];
        $punya->imageprofile = $verif['imageprofile'];
        $punya->save();
        return view('profile.profile',compact('punya'));
        // return $request->file('imageupload')->store('profile-picture');
        // dd($request);
    }

    // public function saveProfile(Request $request)
    // {
    //     if ($request->hasFile('imageprofile')) {
    //         $file = $request->file('imageprofile');
    //         // Perform any necessary validation or processing on the file
    //         // For example: check file size, file type, or generate a unique filename

    //         // Save the file to the desired location
    //         $path = $file->store('profile-pictures', 'public');

    //         // Save the file path to the database or associate it with a user
    //         $user = User::find(auth()->user()->id);
    //         $user->imageprofile = $path;
    //         $user->save();

    //         return response()->json(['message' => 'File uploaded successfully.']);
    //     }

    //     return response()->json(['message' => 'No file uploaded.'], 400);
    // }

    public function openprofile(){
        $punya = User::find(auth()->user()->id);
        return view('profile.profile',compact('punya'));
    }

}
