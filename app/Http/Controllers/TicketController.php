<?php

namespace App\Http\Controllers;

use app\Models\Client;
use App\Models\File;
use App\Models\Ticket;
use Illuminate\Http\Request;
use app\Models\User;

class TicketController extends Controller
{


    // public function store(Request $request){

    //     $client = User::where('email', $request->input('email'))->first();

    //     if(!$client){

    //         $request->validate([

    //                 'email'=>  'required',
    //                 'first_name' => 'required',
    //                 'last_name' => 'required',
    //                 'phone' => 'required'

    //         ]);

    //         $user = new User([
    //             'email' => $request->input('email'),
    //             'first_name' => $request->input('first_name'),
    //             'last_name' => $request->input('last_name'),
    //             'phone' => $request->input('phone'),
    //         ]);
    //         $user->save();
    //     }

    //         $request->validate([

    //             'subject'=> 'required',
    //             'priority'=> 'required',
    //             'description'=> 'required',
    //             'file' => 'required',
    //     ]);


    //     $clients = new Client();
    //     $clients->user_id = $user->id;
    //     $clients->save();

    //     $ticket = new Ticket([

    //         'subject' => $request->input('subject'),
    //         'content' => $request->input('description'),
    //         'priorite' => $request->input('priority'),
    //         'client_id' => $clients->id

    //     ]);
    //     $ticket->save();





    //     $fich = $request->input('file');
    //     $fich->store('uploads');
    //     $fich_name = $fich->getClientOriginalName();
    //     $file_size = $fich->getSize();
    //     $extension = $fich->getClientOriginalExtension();

    //     $file = new File();

    //     $file->file = $request->input('file');
    //     $file->name = $fich_name;
    //     $file->size = $file_size;
    //     $file->type = $extension;
    //     $file->ticket_id = $ticket->id;

    //     $file->save();

    //     return redirect()->route('new_ticket');



    // }


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



}
