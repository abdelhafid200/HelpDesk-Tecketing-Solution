@extends('dashboard.layout.dashboard')
@section('title', 'cansulter')

@section('content')
@include('dashboard.horaire.headerTemporer')




{{-- <form action="{{ route('store1/{{$calendar->id}}')}}" method="POST" class="all" id="external-form"> --}}
{{-- <form action="{{ route('update'.{{$calendar->id}})}}" method="POST" class="all" id="external-form"> --}}
<form action="{{ route('dashboard.update', ['id' => $calendar->id]) }}" method="POST" class="all" id="external-form">
    @csrf
    @method('PUT')
    <div class="new_calendar">


        <div class="calendar_name">
            <div class="row">
                <div class="col-md-9">
                    <h4> Edit Business Hours </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <label for="customHours01" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="name" id="customHours01"  value="{{$calendar->name}}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-9">
                    <label for="customHours02" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" id="customHours02"  value="{{$calendar->description}}">
                </div>
            </div>


            <div class="row">
                <div class="col-md-9">
                    <label for="" class="form-label">Fuseau horaire</label>
                    <select name="timezone" class="form-control" id="timezone">
                        <option value="Africa/Casablanca">(GMT+01:00) Casablanca</option>
                    </select>
                </div>
            </div>
        </div>



        <div class="col-md-4">
            <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
                <li class="nav-item" role="presentation">
                    <a class="nav-link rounded-5" id="contact-tab2" data-bs-toggle="tab" href="#contact1" role="tab" aria-selected="false">Heures de travail</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link active rounded-5" id="home-tab2" data-bs-toggle="tab" href="#home1" role="tab" aria-selected="true">Holidays</a>
                </li>
            </ul>
        </div>

        <div class="tab-content">



<div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab2">




    <div class="d-flex flex-row-reverse">
        <div class="p-2" id="add_fete">
            <a href="#"  id="myButton">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" style="margin-top: -2px; margin-right: 4px;" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>   Ajouter jours de fêtes
            </a>
        </div>
    </div>
        <div id="internal-form">
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h3>Ajouter une Fête</h3>
                            <div id="myForm">{{-- <form id="myForm"> --}}
                                <div class="row" id="date_name">
                                    <div class="col-md-6">
                                        <label for="Date" class="form-label">Date <span style="color:red ;">*</span></label>
                                        <input type="date" id="Date" class="form-control" value="{{$holidays->date}}" name="date">
                                    </div>
                                </div>
                                <div class="row" id="fete_name">
                                    <div class="col-md-10">
                                        <label for="Name" class="form-label">Name <span style="color:red ;">*</span></label>
                                        <input type="text" id="Name" class="form-control" value="{{$holidays->name}}"  name="name_holiday">
                                    </div>
                                </div>


                                <div class="row" id="cancel_add">
                                    <div >
                                        <button type="button" class="cancel" aria-label="Close" id="cancelButton">Annuler</button>
                                    </div>
                                    <div >
                                        <button class="add" id="submitButton" type="button">Envoyer</button>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
        </div>
            {{--  --}}
                <!-- Autres contenus pour l'onglet Home -->
            <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab2">

                <!-- Autres contenus pour l'onglet Contact -->

                    @include('dashboard.horaire.editHourse')

                {{-- fin de class="select_hous" --}}
            </div> {{-- fin de ul--}}
        </div> {{-- fin de ul--}}
        <input type="submit" value="Envoyer">
    </div>
</form>




                            <script>
                                            // Écoutez les changements de sélection des options
                                            var options = document.getElementsByName('option');
                                            for (var i = 0; i < options.length; i++) {
                                                options[i].addEventListener('change', function() {
                                                    displayContent(this.value);
                                                });
                                            }

                                            // Fonction pour afficher le contenu correspondant à l'option sélectionnée
                                            function displayContent(option) {
                                                var content1 = document.getElementById('content1');
                                                var content2 = document.getElementById('content2');

                                                // Réinitialisez l'affichage de tous les contenus
                                                content1.style.display = 'none';
                                                content2.style.display = 'none';

                                                // Affichez le contenu correspondant à l'option sélectionnée
                                                if (option === 'option1') {
                                                    content1.style.display = 'block';
                                                } else if (option === 'option2') {
                                                    content2.style.display = 'block';
                                                }
                                            }
                                        </script>


                                        {{-- affichage de days --}}
                                        {{-- <script>
                                            var options = document.querySelectorAll('input[type="checkbox"]');
                                            var contents = document.querySelectorAll('[id^="content"]');

                                            options.forEach(function(option, index) {
                                                option.addEventListener('change', function() {
                                                    if (option.checked) {
                                                        contents[index].style.display = 'block';
                                                    } else {
                                                        contents[index].style.display = 'none';
                                                    }
                                                });
                                            });
                                        </script> --}}

                                        {{-- code de form 2 --}}



                                        {{-- le code de form2 --}}
                                        <script>
                                            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                                                var contents = document.getElementsByClassName('content');

                                                checkboxes.forEach(function (checkbox) {
                                                checkbox.addEventListener('change', function () {
                                                    var target = this.dataset.target;
                                                    var content = document.getElementById(target);

                                                    if (content) {
                                                    if (this.checked) {
                                                        content.style.display = 'block';
                                                    } else {
                                                        content.style.display = 'none';
                                                    }
                                                    }
                                                });
                                                });
                                            </script>


                                            {{-- script de fieldset --}}
                                            <script>
                                                document.getElementById("internal-form").addEventListener("submit", function(event) {
                                                    event.preventDefault(); // Empêche la soumission du formulaire interne

                                                    // Collecte des données du formulaire interne
                                                    var field1Value = document.getElementById("internal-form").querySelector("input[name='field1']").value;
                                                    var field2Value = document.getElementById("internal-form").querySelector("input[name='field2']").value;

                                                    // Inclusion des données du formulaire interne dans le formulaire externe
                                                    document.getElementById("external-form").insertAdjacentHTML('beforeend', '<input type="hidden" name="field1" value="' + field1Value + '">');
                                                    document.getElementById("external-form").insertAdjacentHTML('beforeend', '<input type="hidden" name="field2" value="' + field2Value + '">');

                                                    // Soumission du formulaire externe avec les données du formulaire interne incluses
                                                    document.getElementById("external-form").submit();
                                                });
                                            </script>

                                            {{-- script de fieldset --}}





                                            <script>
                                                const modal = document.getElementById('myModal');
                                            const button = document.getElementById('myButton');
                                            const form = document.getElementById('myForm');
                                            const submitButton = document.getElementById('submitButton');
                                            const cancelButton = document.getElementById('cancelButton');
                                            var closeModal = document.getElementsByClassName("close")[0];


                                                button.addEventListener('click', function() {
                                                modal.style.display = 'block';
                                                });

                                                form.addEventListener('submit', function(event) {
                                                event.preventDefault();
                                                // Logique de soumission du formulaire
                                                console.log('Le formulaire a été soumis.');
                                                });


                                                closeModal.addEventListener("click", function() {
                                                                    modal.style.display = "none";
                                                                    });


                                                cancelButton.addEventListener('click', function() {
                                                modal.style.display = 'none';
                                                });

                                                window.addEventListener('click', function(event) {
                                                if (event.target == modal) {
                                                    modal.style.display = 'none';
                                                }
                                                });

                                                </script>






@endsection
