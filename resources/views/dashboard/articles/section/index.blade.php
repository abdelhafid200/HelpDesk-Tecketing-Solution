@extends('dashboard.layout.dashboard')

@section('title', 'Ajouter Section')

@section('content')


@if (session()->has('message_section'))
    <div class="alert alert-info" role="alert" id="message_section">
        {{session()->get('message_section')}}
    </div>
@endif
@if (session()->has('section_supprimer'))
    <div class="alert alert-danger" role="alert" id="section_supprimer">
        {{session()->get('section_supprimer')}}
    </div>
@endif
@if (session()->has('section_modifier'))
    <div class="alert alert-secondary" style = "position:relative; left:20px;" role="alert" id="section_modifier">
        {{session()->get('section_modifier')}}
    </div>
@endif


<div class="px-5 d-flex justify-content-between mt-5 pb-3 ">
        <div>
            <h4 class="fw-bold fs-3 mb-4" style="color:#12344d;">Section</h4>
            <small class="mt-3"> Nombre du sections : {{ $count }} </small>
        </div>
        <div>
            <button type="button" class="btn btn-primary" id="MyButton">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus mb-1" viewBox="0 0 16 16">
                        <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                    </svg>
                    Ajouter Section
            </button>
        </div>
</div>

    @include('dashboard.articles.section.create')


    @foreach ($sections as $section)
    <div class="consult-section">
            <div class="d-flex justify-content-between">
                <div>
                    <h4 class="fw-bold fs-5" style="color:#12344d;"> {{$section->nom}} </h4>
                        <div class="mt-4">
                            {{ $section->description }}
                        </div>
                </div>
                <div>
                    <div class="mt-2">
                        <a href=" {{ route('dashboard.section.destroy', $section->id)}} " class="btn-edit-client bg-danger ms-2">

                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                                Supprimer
                        </a>
                    </div>
                    <div class="mt-4 ms-2">
                        {{-- <a href="{{ route('dashboard.customers.edit', ['id',$client->id]) }}" class="btn-edit-client"> --}}
                        <a href=" {{ route('dashboard.section.edit', $section->id) }} " class="btn btn-secondary"  id="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                            <span class="ps-1">Modifier</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

{{--

        <script>
            // Code pour ajouter un élément via AJAX
                $("#add-form").submit(function(event) {
                event.preventDefault();
                $.ajax({
                    url: "/add",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function(response) {
                    if (response.success) {
                        // L'opération a réussi, vous pouvez afficher un message de succès ici
                        console.log("Ajout réussi !");
                    } else {
                        // L'opération a échoué, vous pouvez afficher un message d'erreur ici
                        console.log("Échec de l'ajout : " + response.message);
                    }
                    }
                });
                });

                // Code pour mettre à jour un élément via AJAX
                $("#update-form").submit(function(event) {
                event.preventDefault();
                $.ajax({
                    url: "/update",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function(response) {
                    if (response.success) {
                        // L'opération a réussi, vous pouvez afficher un message de succès ici
                        console.log("Mise à jour réussie !");
                    } else {
                        // L'opération a échoué, vous pouvez afficher un message d'erreur ici
                        console.log("Échec de la mise à jour : " + response.message);
                    }
                    }
                });
                });

        </script> --}}




@endsection
