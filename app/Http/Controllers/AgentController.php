<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{


    public function consultAgent(){
        return view('dashboard.agent.consulterAgent');
    }

}
