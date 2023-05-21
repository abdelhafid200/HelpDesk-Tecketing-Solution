<?php

namespace App\Http\Controllers;


use App\Models\Client;
use App\Models\Message;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Symfony\Component\String\b;

class MessageController extends Controller
{


    public function index(){

        $user = Auth::user();
        $client = Client::where('user_id', $user->id)->first();
        $ticket = Ticket::where('client_id', $client->id)->first();
        return view('public.ticket.repond', compact('ticket'));
    }

    public function store(Request $request){


        $request->validate([
            'response' => 'required'
        ]);

        $user = User::with('client')->find(Auth::id());
        $client = $user->client;
        $ticket = Ticket::where('client_id', $client->id)->first();

        $message = new Message();
        $message->content = $request->input('response');
        $message->agent_id = 1;
        $message->ticket_id = $ticket->id;

        $message->save();

        return redirect()->route('tickets.index')->with('response', 'Le response a été envoyé avec succès.');

    }

}
