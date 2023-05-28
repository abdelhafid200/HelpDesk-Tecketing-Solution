@extends('public.ticket.ticket')

@section('content')


<div class="fw-bold ps-5">
    <h3 class="fw-bold">
        Bienvenue : {{$client->user->first_name}} {{$client->user->last_name}}
    </h3>
</div>

<div class="my-ticket">
    <div class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-ticket-perforated-fill mt-2 me-2" viewBox="0 0 16 16">
            <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5Zm4-1v1h1v-1H4Zm1 3v-1H4v1h1Zm7 0v-1h-1v1h1Zm-1-2h1v-1h-1v1Zm-6 3H4v1h1v-1Zm7 1v-1h-1v1h1Zm-7 1H4v1h1v-1Zm7 1v-1h-1v1h1Zm-8 1v1h1v-1H4Zm7 1h1v-1h-1v1Z"/>
        </svg>
        <span class="" style="margin-top: 2px;">Mes tickets</span>
    </div>
    <table class="table bg-white">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Sujet</th>
                <th scope="col">priorite</th>
                <th scope="col">l'agent</th>
                <th scope="col">status</th>
                <th scope="col">created_at</th>
                <th scope="col">Consulter</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($tickets as $ticket)

            <tr>
                <th scope="row">{{ $ticket->id }}</th>
                <td>{{ $ticket->subject }}</td>
                <td>{{ $ticket->priorite }}</td>
                <td>{{ $ticket->agent_id }}</td>
                <td>{{ $ticket->status }}</td>
                <td>{{ $ticket->created_at }}</td>
                <td><a href=" {{ route('tickets.response', ['id'=>$ticket->id])}} ">Consulter le ticket</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection
