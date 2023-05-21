<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\File;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class TicketController extends Controller
{







    public function newTicket(Request $request)
    {
        $email = $request->input('email');

        // Vérifie si l'adresse e-mail existe déjà dans la base de données
        $user = User::where('email', $email)->first();

        // Si l'e-mail n'existe pas dans la base de données, affiche les champs pour créer un nouveau client
        if (!$user) {
            $userFields = true;
        } else {
            $userFields = false;
        }

        $users = new User();

        // $client = new Client();
        // $client->user_id = $users->id;
        // $client->save();

        if ($userFields) {
            $newClient = new User();
            $newClient->email = $email;
            $newClient->first_name = $request->input('first_name');
            $newClient->last_name = $request->input('last_name');
            $newClient->phone = $request->input('phone');
            $newClient->save();
        }

        $ticket = new Ticket();
        $ticket->subject = $request->input('subject');
        $ticket->priorite = $request->input('priority');
        $ticket->content = $request->input('description');
        $ticket->client_id = $users->id;
        $ticket->save();

        $file = $request->file('file');
        $path = $file->store('uploads', ['disk' => 'local']);
        $fich_name = $file->getClientOriginalName();
        $file_size = $file->getSize();
        $extension = $file->getClientOriginalExtension();

        $newFile = new File();
        $newFile->name = $fich_name;
        $newFile->size = $file_size;
        $newFile->type = $extension;
        $newFile->ticket_id = $ticket->id;
        $newFile->save();


        // Si les champs du client sont affichés, crée un nouveau client avec les détails fournis



        return redirect()->back()->with('success', 'Ticket créé avec succès.');
    }







    public function notFound(){

        $ticket = Ticket::first();
        return view('public.ticket.notfound', compact('ticket'));
    }

    public function ticket(){

        $ticket = Ticket::first();
        return view('public.ticket.ticket', compact('ticket'));

    }



    public function chercher(){
        return view('public.ticket.chercher');
    }

    public function search_ticket(Request $request){

        $request->validate([
            'code' => "required",
        ]);

        $code = $request->input('code');

        $ticket = Ticket::where('code', $code)->firstOrFail();

        return view('public.ticket.search', compact('ticket'));

        // if ($ticket) {
        // } else {
        //     $error = "Ticket $code not found";
        //     return view('public.ticket.search', compact('error','ticket'));
        // }

    }


    public function show(){

        $user = Auth::user();

        $client = Client::where('user_id', $user->id)->first();
        $tickets = Ticket::where('client_id', $client->id)->get();

        /**
         *
         *  Erreur de Class "app\Models\Client" not found
         *
         */



        // $tickets = Ticket::get();
        return view('public.ticket.myTicket', compact('tickets'));

    }

    public function response($id){

        $ticket = Ticket::where('id', $id)->first();
        return view('public.ticket.repond', compact('ticket'));

    }












}


