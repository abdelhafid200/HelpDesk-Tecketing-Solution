@extends('dashboard.layout.dashboard')

@section('title', 'Ajouter client')

@section('content')

        @if (session()->has('message'))
            <div class="alert alert-info" role="alert" id="message">
                {{session()->get('message')}}
            </div>
        @endif
        @if (session()->has('message_supprimer'))
            <div class="alert alert-danger" role="alert" id="message_supprimer">
                {{session()->get('message_supprimer')}}
            </div>
        @endif
        @if (session()->has('message_block'))
            <div class="alert alert-secondary" role="alert" id="message_block">
                {{session()->get('message_block')}}
            </div>
        @endif


<div class="px-5 pb-5">

    <div class="d-flex justify-content-between">
        <div>
            <h4 class="fw-bold fs-3" id="title-client">les Clients</h4>
            <small class="mt-3">nombre du clients : {{$count}} </small>
        </div>
        <div>
            {{-- <button type="button" class="btn btn-secondary border-none" style="background-color: #94a3b8;"> <a href="{{ route('dashboard.customers.create')}}" class="text-white text-decoration-none">liste du Clients blocker</a> </button> --}}
            <button type="button" class="btn btn-primary"> <a href="{{ route('dashboard.customers.create')}}" class="text-white text-decoration-none">Ajouter Client</a> </button>
        </div>

    </div>
    @foreach ($clients as $client)

    <div class="p-2  bg-white shadow-sm rounded-lg border border-transparent mt-3 d-flex justify-content-between">
        <div>
            <a href="" class="href_casa">
                <div >
                    <div class="name_calendar">
                        <span>{{$client->user->first_name}} {{$client->user->last_name}} </span>
                    </div>
                    <div class="Casablanca">
                        <span> {{$client->user->phone}} </span>
                        <br>
                        <small>{{$client->description}} </small>.
                        <br>
                        <small>
                            Statu :
                            @switch($client->is_blocked)
                                @case(0) n'est pas bloqué

                                    @break
                                @default est bloqué
                            @endswitch
                        </small>.
                    </div>
                </div>
            </a>
        </div>
        <div class="d-flex">

                <div class="mt-4">
                    <a href="{{ route('dashboard.customers.confirm-supprimer', $client->id) }}" class="btn-edit-client bg-danger ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                        </svg>
                            Supprimer
                    </a>
                </div>

                <div class="mt-4 ms-2">
                    {{-- <a href="{{ route('dashboard.customers.edit', ['id',$client->id]) }}" class="btn-edit-client"> --}}
                    <a href="{{ route('dashboard.customers.edit', ['id' => $client->id]) }}" class="btn-edit-client bg-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg>
                        Modifier
                    </a>
                </div>

                <div class="mt-4">
                    <a href="{{ route('dashboard.customers.confirm-block', $client->id) }}" class="btn-edit-client bg-secondary ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-slash-circle pt-0 mb-1" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M11.354 4.646a.5.5 0 0 0-.708 0l-6 6a.5.5 0 0 0 .708.708l6-6a.5.5 0 0 0 0-.708z"/>
                        </svg>
                            Bloquer
                    </a>
                </div>

                <form action="{{ route('dashboard.customers.deblock',['id'=> $client->id]) }}" class="ps-2" method="post">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-success mt-3 ps-3 pe-3 pt-2" style="font-weight:bold">
                        Deblocker
                        </span>
                    </button>
                </form>

        </div>



</div>
@endforeach


@endsection
