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
        $messages = Message::where('ticket_id',$ticket->id)->get();
        return view('public.ticket.repond', compact('ticket','client', 'messages'));
    }

    public function store(Request $request){


        $request->validate([
            'response' => 'required'
        ]);

        $user = User::with('client')->find(Auth::id());
        $client = $user->client;

        // $ticket = Ticket::where('client_id', $client->id)->first();
        $ticketId = $request->route('id');
        // dd($ticketId);
        $ticket = Ticket::where('id', $ticketId)
        ->where('client_id', $client->id)
        ->first();

        $message = new Message();
        $message->content = $request->input('response');
        $message->agent_id = 1;
        $message->ticket_id = $ticket->id;

        $message->save();

        return redirect()->route('tickets.response', ['id'=>$ticket->id]);
    }

    public function destroy($id){


        $messages = Message::findOrFail($id);
        $messages->delete();

            // dd($messages);

        return to_route('tickets.response', ['id' => $messages->ticket_id])->with('response_supprimé', 'le messafe à été supprimé avec succée');

    }

}
