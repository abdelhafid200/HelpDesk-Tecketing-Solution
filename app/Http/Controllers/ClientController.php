<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\ProfileMail;
use App\Models\Agent;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;



class ClientController extends Controller
{
    //

    public function index(){
        $count = Client::count();
        $clients = Client::with('user')->get();
        return view('dashboard.customer.index', compact('clients','count'));


    }

    public function create(){

        $agents = new Agent();
        return view('dashboard.customer.create',compact('agents'));

    }

    /*
    *
    * on va ajouter les clients dans la fonction store
    *
    */

    public function store(Request $request){

        $request->validate([

            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'adresse'=>'required',
            'description'=>'required',
            'password'=>'required|confirmed',

        ]);



        $user = new User();

        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password = bcrypt($request->input('password'));
        $user->save();


        $client = new Client();
        $client->user_id = $user->id;
        $client->adress = $request->input('adresse');
        $client->description = $request->input('description');
        $client->save();

        Mail::to($user->email)->send(new ProfileMail($user));
        // Mail::to('khalilabdo251@gmail.com')->send(new ProfileMail($user));
        return to_route('dashboard.customers.index')->with('message','le client a été créer avec succées');
    }





    public function verifyEmail(String $hash){

        [$createdAt,$id] = explode('///',base64_decode($hash));
        $user = User::findOrFail($id);

        if(Carbon::parse($createdAt)->toDateTimeString() !== $user->created_at->toDateTimeString()){
            abort(403);
        }
        if($user->email_verified_at !== NULL){
            return view('dashboard.customer.editPassword',compact('hash'));
        }



        // if($user->email_verified_at !== NULL){
        //     return response('compte déja activé');
        // }
        $name = $user->first_name;
        $email = $user->email;
        $user->fill([
            'email_verified_at' => time()
        ])->save();
        // $user->email_verified_at = Carbon::now();
        // $user->save();
        return view('dashboard.customer.email_verified', compact('name','email','hash'));
    }

    // public function newPassword(Request $request,string $hash){

    //     $request->validate([

    //         'name' => 'required',
    //         'password'=>'required|confirmed',

    //     ]);

    //     [$createdAt,$id] = explode('///',base64_decode($hash));

    //     $user = User::where('id', $id)->firstOrFail();
    //     $user->update([
    //         'name' => $request->input('name'),
    //         'password' => bcrypt($request->input('password'))

    //     ]);
    //     return to_route('/');
    // }


        public function editPassword(string $hash){

            [$createdAt,$id] = explode('///',base64_decode($hash));
            $user = User::findOrFail($id);



            // $user = User::findOrFail($id);
            return view('dashboard.customer.editPassword', compact('user','hash'));
        }

        public function updatePassword(Request $request,string $hash){

                $request->validate([

                    'first_name' => 'required',
                    'password'=>'required|confirmed',

                ]);


                [$createdAt,$id] = explode('///',base64_decode($hash));

                $user = User::where('id', $id)->firstOrFail();
                $user->update([
                    'first_name' => $request->input('first_name'),
                    'password' => bcrypt($request->input('password'))

                ]);


                // return to_route('/');
                // return redirect()->route('editPassword')->with('message_password','Le mot de passe a été modifié avec succès');
                return redirect()->route('editPassword', ['hash' => $hash])->with('message_password', 'Le mot de passe a été modifié avec succès');
            }


        public function edit($id){
            $client = Client::findOrFail($id);
            // $user = User::all();
            return view('dashboard.customer.edit', compact('client'));
        }

        public function update(Request $request, $id){
            $request->validate([

                'first_name'=>'required',
                'last_name'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'adresse'=>'required',
                'description'=>'required',
                'password'=>'required|confirmed',

            ]);

            $client = Client::findOrFail($id);
            $client->update([

                'adress' =>$request->input('adresse') ,
                'description' => $request-> input('description'),

            ]);
            $user = User::findOrFail($client->user_id);
            $user->update([

                'first_name' =>$request->input('first_name') ,
                'last_name' => $request-> input('last_name'),
                'email' => $request-> input('email'),
                'phone' => $request-> input('phone'),
                'password' => $request-> input('password'),
            ]);
            return to_route('dashboard.customers.index')->with('message','le client a été Modifier avec succées');
        }

        public function destroy($id){
            $client = Client::findOrFail($id);
            $user = User::findOrFail($client->user_id);
            $client->delete();
            $user->delete();

            return to_route('dashboard.customers.index')->with('message_supprimer','le client a été Supprimé avec succées');
        }


        public function block($id){
            $client = Client::findOrFail($id);

            $client->is_blocked = '1';
            $client->save();

            return to_route('dashboard.customers.index')->with('message_block','le client a été Blocker avec succées');
        }
        public function deblock($id){
            $client = Client::findOrFail($id);

            $client->is_blocked = '0';
            $client->save();

            return to_route('dashboard.customers.index')->with('message_block','le client a été deBlocker avec succées');
        }

        public function confirmBlock($id) {
            $client = Client::findOrFail($id);
            return view('dashboard.customer.confirm-block', compact('client'));
        }

        public function confimSupprimer($id) {
            $client = Client::findOrFail($id);
            return view('dashboard.customer.confirm-supprime', compact('client'));
        }



}
