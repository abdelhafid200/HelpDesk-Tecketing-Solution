<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreClientRequest;
use App\Models\User;
use App\Models\Client;
use Illuminate\Auth\Events\Registered;


class UserController extends Controller
{

    /**
     * 
     * 
     */
    public function create()
    {
        return view('public.user.signup');
    }


    public function store(StoreClientRequest $request) {

        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();

        $client = new Client;
        $client->user_id = $user->id;
        $client->save();

        // Trigger the registed event which send verification
        // email to client
        $e = new Registered($user);
        event($e);

        return redirect()->route('user.login');

    }
    
    /**
     * Show the login form
     * 
     */
    public function login()
    {
        return view('public.user.login');
    }

    /**
     * Handle the login and authentication request to the application
     * 
     */
    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){

            $user = Auth::user();

            $request->session()->regenerate();
            return redirect()->route($user->agent ? 'dashboard.index' : 'home');

        }
        
        return back()->withErrors(['email'=> 'Email ou mot de passe incorrect.'])->onlyInput('email');

    }

    /**
     * Log out the user out of the application
     * 
     */
    public function logout(Request $request)
    {
        
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('user.login');

    }

}
