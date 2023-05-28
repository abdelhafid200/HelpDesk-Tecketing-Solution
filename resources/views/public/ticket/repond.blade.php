@extends('public.ticket.ticket')

@section('content')



    <div class="d-flex justify-content-between pt-4 pb-4" style="position:relative; bottom:21px;">
        <div class="fw-bold">
            <h3 class="fw-bold">
                Bienvenue : {{$client->user->first_name}} {{$client->user->last_name}}
            </h3>
        </div>
        <div>
            <a class="btn btn-secondary" href=" {{route('tickets.show1')}} ">
                Retour
            </a>
        </div>
    </div>

    <div class="titles-response d-flex justify-content-between ">
        <div class="d-flex flex-column align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill " viewBox="0 0 16 16">
                <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/>
            </svg>
            <span>conversation</span>
        </div>
        <div class="d-flex flex-column align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ticket-fill" viewBox="0 0 16 16">
                <path d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3h-13Z"/>
            </svg>
            <span>détaille de ticket</span>
        </div>
        <div class=" position-relative left-44 d-flex flex-column align-items-center ms-0" style="position:relative; left:44px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-heart" viewBox="0 0 16 16">
                <path d="M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4Zm13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276Z"/>
            </svg>
            <span>feddback</span>
        </div>
    </div>
    <div class="feed-repond">
        <div class="conversation">

            <button type="button" class="btn btn-primary mb-4" id="Mybutton_ticket">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 16 16">
                    <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                    <path d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1H1Zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1V2Z"/>
                </svg>
                Contacter votre agent
            </button>

            @if (session()->has('response_supprimé'))
            <div>
                <div class="alert alert-danger d-flex justify-content-center" role="alert" id="response_supprimé">
                    {{ session()->get('response_supprimé') }}
                </div>
            </div>
            @endif

            @foreach ($messages as $message)
                <div class="message-conversation mb-2">
                    <div class="d-flex justify-content-between pb-3">
                        <div class="d-flex flex-column ps-4">
                            <span class="fw-bold">{{$client->user->first_name}} </span>
                            <span>{{$client->user->email}} </span>
                        </div>
                        <div class="pt-2">
                            '{{$message->created_at}}'
                        </div>
                    </div>
                    <div>
                    {{ $message->content}}
                    </div>

                    <div class="d-flex justify-content-end pt-4">
                        <a href=" {{ route('tickets.destroy', ['id_message'=>$message->id]) }} " class="text-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="consult-ticket">
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


            <div class="pt-5">

                @include('public.ticket.modal')
            </div>
        </div>


        <div class="grid-feedback">
            @if (session()->has('feedback'))
                <div class="alert alert-info" role="alert" id="feedback">
                    {{session()->get('feedback')}}
                </div>
            @endif

            <div>
                <span class="">
                    {{-- <img src="{{  url('https://icons8.com/icon/83148/comments')}}" alt=""> --}}
                    <img src="{{ asset('images/feedback2.png') }}" alt="feedback" class="icone-feedback">
                </span>
                <span class="title-feedback">Niveaux de Satisfaction</span>

            </div>

            <div class="mt-3">
                <form action=" {{ route('tickets.feed') }} " method="post">
                    @csrf
                    <div class="btn-group feedback" role="group" aria-label="Basic radio toggle button group">


                        {{-- <div class="d-flex pb-3"> --}}
                            <div class="me-2 bg-light" style="background-color: white !important;">
                                <input type="radio" class="btn-check" name="feedback" value="Très satisfait" id="btnradio1" autocomplete="off" >
                                <label class="btn btn-outline-primary" for="btnradio1">
                                    <img src="{{ asset('images/emoji.png') }}" alt="" class="size-icone">
                                    Très satisfait
                                </label>
                            </div>

                            <div class="me-2 bg-light" style="background-color: white !important;">
                                <input type="radio" class="btn-check" name="feedback" value="Satisfait" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio2">
                                    <img src="{{ asset('images/smile.png') }}" alt="" class="size-icone">
                                    satisfait
                                </label>
                            </div>
                        {{-- </div> --}}

                        {{-- <div class="d-flex pb-3"> --}}
                            <div class="me-2 bg-light" style="background-color: white !important;">
                                <input type="radio" class="btn-check" name="feedback" value="Neutre" id="btnradio3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio3">
                                    <img src="{{ asset('images/smile2.png') }}" alt="" class="size-icone">
                                    Neutre
                                </label>
                            </div>

                            <div class="me-2 bg-light" style="background-color: white !important;">
                                <input type="radio" class="btn-check" name="feedback" value="Insatisfait" id="btnradio4" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio4">
                                    <img src="{{ asset('images/bored.png') }}" alt="" class="size-icone">
                                    Insatisfait
                                </label>
                            </div>
                        {{-- </div> --}}


                        {{-- <div class="d-flex pb-3" style="flex-direction: column"> --}}
                            <div class="me-2" style="background-color: white !important;">
                                <input type="radio" class="btn-check" name="feedback" value="Très Insatisfait" id="btnradio5" autocomplete="off">
                                <label class="btn btn-outline-primary text-black" for="btnradio5">
                                    <img src="{{ asset('images/angry.png') }}" alt="" class="size-icone">
                                    Très Insatisfait
                                </label>
                            </div>
                            <div>
                                <input type="submit" value="Envoyer" class="btn btn-primary ">
                            </div>

                        {{-- </div> --}}

                    </div>
                </form>


            </div>

        </div>
    </div>


    {{-- <script>
        tinymce.init({
            selector: '#response',
            height: 500,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script> --}}



@endsection
