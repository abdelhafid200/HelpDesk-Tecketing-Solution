
@extends('dashboard.layout.dashboard')
@section('title', 'cansulter')

@section('content')
@include('dashboard.horaire.headerTemporer')




    <form action="{{ route('store1')}}" method="POST" class="all" id="external-form">
        @csrf
        <div class="new_calendar">


            <div class="calendar_name">
                <div class="row">
                    <div class="col-md-9">
                        <h4> New Business Hours </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <label for="customHours01" class="form-label">Nom</label>
                        <input type="text" class="form-control" name="name" id="customHours01"  placeholder="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9">
                        <label for="customHours02" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" id="customHours02"  placeholder="">
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



            <div class="col-md-4" style="margin-left: 26px;">
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


                    @include('dashboard.horaire.addHoliday')

                {{--  --}}
                    <!-- Autres contenus pour l'onglet Home -->
                <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab2">

                    <!-- Autres contenus pour l'onglet Contact -->


                                <div class="select_hous">
                                    <div class="hous_business">


                                            <p class="ouverture">
                                                Définir les heures d'ouverture
                                            </p>

                                        <div class="radio">
                                            <div class="option_select">
                                                    <div>
                                                        <input type="radio" name="option" value="0" id="option2">
                                                        <label for="option2">24 hrs x 7 days</label>
                                                            <br>
                                                        <small>Round the clock support</small>
                                                        <br>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="option" value="1" id="option1">
                                                        <label for="option1"> Custom business hours</label>
                                                        <br>
                                                        <small>Setup custom working hours for your team</small>
                                                    </div>
                                            </div>
                                            <br>

                                            {{-- Contenue 1 --}}
                                            <div id="content1" style="display: none;">
                                                    <span>select the working days</span>
                                                        <div class="days">
                                                            <div class="plaise">
                                                                <div class="grid">
                                                                    <input type="checkbox" id="lundi" value="0" data-target="content01">
                                                                    <label for="lundi">Lundi</label>
                                                                </div>



                                                                <div class="grid">
                                                                    <input type="checkbox" id="mardi" value="1" data-target="content02">
                                                                    <label for="mardi">Mardi</label>
                                                                </div>

                                                                <div class="grid">
                                                                    <input type="checkbox" id="mercredi" value="2" data-target="content03">
                                                                    <label for="mercredi">Mercredi</label>
                                                                </div>

                                                                <div class="grid">
                                                                    <input type="checkbox" id="jeudi" value="3" data-target="content04">
                                                                    <label for="jeudi">Jeudi</label>
                                                                </div>

                                                                <div class="grid">
                                                                    <input type="checkbox" id="vendredi" value="4" data-target="content05">
                                                                    <label for="vendredi">Vendredi</label>
                                                                </div>

                                                                <div class="grid">
                                                                    <input type="checkbox" id="samedi" value="5" data-target="content06">
                                                                    <label for="samedi">Samedi</label>
                                                                </div>

                                                                <div class="grid">
                                                                    <input type="checkbox" id="dimanche" value="6" data-target="content07">
                                                                    <label for="dimanche">Dimanche</label>
                                                                </div>
                                                            </div>


                                                            <span>Enter the working hours</span>

                                                            <div id="content01" style="display: none;" >
                                                                <div class="day_number">
                                                                    <div class="mar_lun">
                                                                        <label for="">Lundi</label>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="time" name="schedule[monday][start]" id="">
                                                                    </div>
                                                                    <div class="to">
                                                                        <small>to</small>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="time" name="schedule[monday][end]" id="">
                                                                    </div>
                                                                </div>
                                                            </div>





                                                            <div id="content02" style="display: none;">
                                                                <div class="day_number">
                                                                    <div class="mar_lun">
                                                                        <label for="">Mardi</label>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="time" name="schedule[tuesday][start]" id="">
                                                                    </div>
                                                                    <div class="to">
                                                                        <small>to</small>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="time"name="schedule[tuesday][end]" id="">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            {{-- mercredi --}}


                                                            <div id="content03" style="display: none;">
                                                                <div class="day_number">
                                                                    <div class="mar_lun">
                                                                        <label for="">Mercredi</label>
                                                                    </div>
                                                                    <div class="col-md-2" style="margin-left: -20px;">
                                                                        <input type="time" name="schedule[wednesday][start]" id="">
                                                                    </div>
                                                                    <div class="to">
                                                                        <small style="margin-left: 13px;">to</small>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="time" name="schedule[wednesday][end]" id="">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            {{-- jeudi --}}


                                                            <div id="content04" style="display: none;">
                                                                <div class="day_number">
                                                                    <div class="mar_lun">
                                                                        <label for="">Jeudi</label>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="time" name="schedule[thursday][start]" id="" style="margin-left: 1px;">
                                                                    </div>
                                                                    <div class="to">
                                                                        <small style="margin-left: 17px;">to</small>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="time" name="schedule[thursday][end]" id="">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            {{-- vendredi --}}



                                                            <div id="content05" style="display: none;">
                                                                <div class="day_number">
                                                                    <div class="mar_lun">
                                                                        <label for="">Vendredi</label>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="time" name="schedule[friday][start]" id="" style="margin-left: -23px;">
                                                                    </div>
                                                                    <div class="to">
                                                                        <small style="margin-left: -9px;">to</small>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="time" name="schedule[friday][end]" id="">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            {{-- samedi --}}



                                                            <div id="content06" style="display: none;">
                                                                <div class="day_number">
                                                                    <div class="mar_lun">
                                                                        <label for="">Samedi</label>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="time" name="schedule[saturday][start]" id="" style="margin-left: -16px;">
                                                                    </div>
                                                                    <div class="to">
                                                                        <small style="margin-left: 2px;">to</small>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="time" name="schedule[saturday][end]" id="">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            {{-- dimanche --}}



                                                            <div id="content07" style="display: none;">


                                                                <div class="day_number">
                                                                    <div class="mar_lun">
                                                                        <label for="">Dimanche</label>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="time" name="schedule[Sunday][start]" id="" style="margin-left: -34px;">
                                                                    </div>
                                                                    <div class="to">
                                                                        <small style="  margin-left: -14px;">to</small>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="time" name="schedule[Sunday][end]" id="">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div> {{--  fin de class="day" --}}


                                            </div> {{--  fin de contenu 1 --}}


                                                        <div id="content2" style="display: none;">

                                                        </div>




                                        </div> {{--  fin de class="radio"  --}}


                                    </div>      {{--  fin de class ="hous_business" --}}

                                </div>          {{-- fin de class="select_hous" --}}

                </div> {{-- fin de ul--}}
            </div> {{-- fin de ul--}}
            <hr class="ligne_bbb">

            <div class="col-6 btn-btn" >
                <button class="btn btn-secondary" type="reset">Annuler</button>
                <button class="btn btn-primary" id="saveScheduleBtn" type="submit">Submit</button>
            </div>


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
                                                    if (option === '1') {
                                                        content1.style.display = 'block';
                                                    } else if (option === '0') {
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

                                                        document.getElementById('saveBtn').addEventListener('click', function() {
                                                            // Récupérer les valeurs sélectionnées des jours et des heures
                                                            var selectedDays = document.querySelectorAll('.days input[type="checkbox"]:checked');
                                                            var selectedHours = document.querySelectorAll('.day_number input[type="time"]');

                                                            // Créer un tableau pour stocker les jours et les heures
                                                            var schedule = [];

                                                            // Parcourir les jours sélectionnés
                                                            selectedDays.forEach(function(day) {
                                                                var dayName = day.getAttribute('id');
                                                                var dayHours = [];

                                                                // Parcourir les heures correspondantes au jour sélectionné
                                                                selectedHours.forEach(function(hour) {
                                                                    var hourName = hour.getAttribute('name');

                                                                    // Vérifier si l'heure correspond au jour sélectionné
                                                                    if (hourName === dayName) {
                                                                        var startHour = hour.value;
                                                                        var endHour = hour.nextElementSibling.nextElementSibling.value;

                                                                        // Stocker les heures dans un objet
                                                                        var hourObject = {
                                                                            start: startHour,
                                                                            end: endHour
                                                                        };

                                                                        // Ajouter l'objet d'heure au tableau des heures du jour
                                                                        dayHours.push(hourObject);
                                                                    }
                                                                });

                                                                // Stocker le jour et ses heures dans le tableau global
                                                                var daySchedule = {
                                                                    day: dayName,
                                                                    hours: dayHours
                                                                };

                                                                schedule.push(daySchedule);
                                                            });

                                                            // Envoyer les données au serveur via une requête AJAX
                                                            var xhr = new XMLHttpRequest();
                                                            xhr.open('POST', '/save-schedule'); // Remplacez '/save-schedule' par votre route de sauvegarde
                                                            xhr.setRequestHeader('Content-Type', 'application/json');
                                                            xhr.onreadystatechange = function() {
                                                                if (xhr.readyState === XMLHttpRequest.DONE) {
                                                                    if (xhr.status === 200) {
                                                                        // Succès de la sauvegarde
                                                                        console.log('Les données du planning ont été sauvegardées avec succès.');
                                                                        window.location.reload(); // Recharger la page pour réinitialiser les sélections
                                                                    } else {
                                                                        // Erreur lors de la sauvegarde
                                                                        console.error('Une erreur s\'est produite lors de la sauvegarde du planning.');
                                                                    }
                                                                }
                                                            };
                                                            xhr.send(JSON.stringify(schedule));
                                                        });

                                                </script>


@endsection
