<?php

namespace App\Http\Controllers\Auth;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProviderController extends Controller
{
    public function redirect($provider){

        return Socialite::driver($provider)->redirect();

    }

    public function dashboard(){
        return view('dashboard');
    }

    
    public function callback($provider){
        $socialiteUser = Socialite::driver($provider)->user();
    
        return redirect('/dashboard');
    }
    
}
