<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{



    public function feedback(){


        $user = Auth::user();
        $client = Client::where('user_id', $user->id)->first();
        $ticket = Ticket::where('client_id', $client->id)->first();

        if (!$ticket) {
            // Gérer le cas où aucun ticket n'est trouvé pour le client
            // Vous pouvez rediriger vers une page d'erreur ou afficher un message approprié
            return redirect()->back()->with('error', 'Aucun ticket trouvé.');
        }

        return view('public.ticket.repond', compact('ticket'));

    }

    public function store(Request $request){

        $request->validate([
            'feedback' => 'required'
        ]);


        $feedback = new Feedback();

        $user = User::with('client')->find(Auth::id());
        $client = $user->client;
        $ticket = Ticket::where('client_id', $client->id)->first();

        $feedback->message = $request->input('feedback');
        $feedback->ticket_id = $ticket->id ;
        $feedback->client_id = $client->id;
        $feedback->status =6;
        $feedback->save();

        return redirect()->route('tickets.feedback')->with('feedback', 'Le feedback a été envoyé avec succès.');

    }


}
