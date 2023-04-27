<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function accueil(){
        return view('portail_client/accueil');
    }
    public function home(){
        return view('portail_client/home');
    }
    public function knowldege(){
        return view('portail_client/knowldege_base');
    }
    public function new_ticket(){
        return view('portail_client/new_ticket');
    }

}
