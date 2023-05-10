<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ProfileMail;
use Illuminate\Support\Facades\Mail;

class StaticController extends Controller
{
    public function accueil(Request $request){

        return view('public.accueil');
    }
    public function home(){
        return view('public.home');
    }
    public function knowldege(){
        return view('public.knowldege_base');
    }
    public function new_ticket(){
        return view('public.new_ticket');
    }

}
