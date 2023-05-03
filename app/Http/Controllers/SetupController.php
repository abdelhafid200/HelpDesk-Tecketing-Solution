<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreAgentRequest;
use App\Models\User;
use App\Models\Agent;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;


class SetupController extends Controller
{

    /**
     * Show the index page to explain admin role
     */
    
    public function create()
    {
        return view('dashboard.setup.create');
    }


    /**
     * 
     */
    public function store(StoreAgentRequest $request)
    {

        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();

        $agent = new Agent;
        $agent->user_id = $user->id;
        $agent->scope = $request->scope;
        $agent->signature = '<b>' . $user->full_name . '</b>';
        $agent->work = $request->work;
        $agent->calendar_id = $request->calendar;
        $agent->save();
        
        // Trigger the registed event which send verification
        // email to user
        $e = new Registered($user);
        event($e);

        // Authenticate user directly without login process
        Auth::login($user, $remember = true);

        return to_route('dashboard.index');


    }

}
