@extends('public.ticket.ticket')

@section('content')


    <div class="feed-repond">
        @if (session()->has('response'))
                <div class="alert alert-info" role="alert" id="response">
                    {{session()->get('response')}}
                </div>
        @endif
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


            <div class="pt-4">
                <p>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Envoyer Un Message
                    </a>
                    {{-- <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Button with data-bs-target
                    </button> --}}
                </p>
                    <div class="collapse" id="collapseExample">
                        <div class="">

                            <form action="{{ route('tickets.store') }}" method="post">
                                @csrf

                                <div class="form-floating py-2 mt-3">
                                    <textarea class="form-control" placeholder="Leave a comment here" name="response" id="response"></textarea>
                                    <label for="response">Comments</label>

                                    <input type="submit" value="Envoyer" class="btn btn-primary mt-4">
                                </div>

                            </form>



                        </div>
                    </div>
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
                <span class="title-feedback">Exprimer Votre Niveaux de Satisfaction</span>

            </div>

            <div class="mt-3">
                <form action=" {{ route('tickets.store') }} " method="post">
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


    <script>
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
    </script>



@endsection
