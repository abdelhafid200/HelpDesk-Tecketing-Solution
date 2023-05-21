

@extends('public.ticket.ticket')

@section('content')


    @if(isset($error))
        <div class="alert alert-danger">{{ $error }}</div>
    @endif


    {{-- <form method="POST" action=" {{ route('tickets.search', ['code' => $ticket->code]) }} " class="d-flex justify-content-end" style="margin-right: -30px;">
        @csrf
        <input class="form-control me-2" type="search" placeholder="Search" value="{{ old('code') }}" name="code" style="width:500px;" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form> --}}



<div class="consult-ticket">
    @if ($ticket)
        <h1>Détails du ticket de Numéro :  <span>{{ $ticket->id }}</span></h1>
        <small> <span class="para">created by :</span>   <span>{{ $ticket->client->user->first_name }}</span></small>
        <div class="d-flex justify-content-center me-5 ms-2">
            <p> <span class="para">le Sujet de ticket :</span>   <span>{{ $ticket->subject }}</span> </p>
        </div>
        <p>
            <span class="pe-5" style="font-weight:700; font-size:20Px">
                le Contenue : <br>
            </span>
            <span class="ms-4">
                {{ $ticket->content }}
            </span>
        </p>
        <div class="d-flex justify-content-between">
            <div>
                <small> <span>le groupe qui associé ce ticket  :  </span><span>{{ $ticket->group_id }}</span> </small><br>
                <small> <span>l'agent qui associé ce ticket :</span>  <span>{{ $ticket->agent_id }}</span> </small>
            </div>
            <div>
                <small> <span>Date de création :  </span><span>{{ $ticket->created_at }}</span> </small> <br>
                <small> <span>Dernière mise à jour : </span><span>{{ $ticket->updated_at }}</span></small>
            </div>
        </div>
    @else

        <h1>Not found</h1>

    @endif
<!-- ajouter d'autres détails du ticket si nécessaire -->

</div>

@endsection



