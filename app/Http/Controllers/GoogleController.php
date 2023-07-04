<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        $user = Socialite::driver('google')->user();
        $finduser = User::where('google_id', $user->getId())->first();
        $olduser = User::where('email', $user->getEmail())->first();
        if($finduser){
            Auth::login($finduser);
            return redirect()->intended('/');

        }elseif($olduser){
            $olduser->google_id = $user->getId();
            $olduser->save();
            Auth::login($olduser);
            return redirect()->intended('/');
            
        }else{
            $newuser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'google_id' => $user->getId(),
                'password' => bcrypt('12423242')
            ]);
            Auth::login($newuser);
            return redirect()->intended('/');
        }
    }
}
