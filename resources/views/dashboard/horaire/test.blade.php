<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    @vite(['resources/css/style2.css', 'resources/js/app.js'])
    @vite('resources/sass/app.scss')
</head>
<body>


    <div class="horaire">
        <h2>Horaire</h2>
        <table>
          <tr>
            <th>Jour</th>
            <th>Heure</th>
            <th>Activité</th>
          </tr>
          <tr>
            <td>Lundi</td>
            <td>9h-10h</td>
            <td>Cours de mathématiques</td>
          </tr>
          <tr>
            <td>Mardi</td>
            <td>14h-16h</td>
            <td>Réunion d'équipe</td>
          </tr>
          <tr>
            <td>Mercredi</td>
            <td>10h-12h</td>
            <td>Exercices de français</td>
          </tr>
          <!-- Ajoutez les autres jours et activités ici -->
        </table>
      </div>
<style>
    .horaire {
  width: 100%;
  max-width: 600px;
  margin: 0 auto;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 10px;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #f5f5f5;
}

</style>








{{-- <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
    <li class="nav-item" role="presentation">
        <a class="nav-link active rounded-5" id="home-tab2" data-bs-toggle="tab" href="#home" role="tab" aria-selected="true">Home</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" href="#profile" role="tab" aria-selected="false">Profile</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link rounded-5" id="contact-tab2" data-bs-toggle="tab" href="#contact" role="tab" aria-selected="false">Contact</a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab2">
        <h3>Home Content</h3>
        <!-- Autres contenus pour l'onglet Home -->
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab2">
        <h3>Profile Content</h3>
        <!-- Autres contenus pour l'onglet Profile -->
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab2">
        <h3>Contact Content</h3>
        <!-- Autres contenus pour l'onglet Contact -->
    </div>
</div> --}}



    <form action="">
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
                        <input type="text" class="form-control" name="name" id="customHours01"  placeholder="" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9">
                        <label for="customHours02" class="form-label">Description</label>
                        <input type="text" class="form-control" name="bio" id="customHours02"  placeholder="" required>
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


            <div class="col-md-3">
                <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active rounded-5" id="home-tab2" data-bs-toggle="tab" href="#home1" role="tab" aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link rounded-5" id="contact-tab2" data-bs-toggle="tab" href="#contact1" role="tab" aria-selected="false">Contact</a>
                    </li>
                </ul>
            </div>



            <div class="tab-content">
                <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab2">
                    <h3>Home Content</h3>
                    <!-- Autres contenus pour l'onglet Home -->
                </div>
                <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab2">
                    <h3>Contact Content</h3>
                    <!-- Autres contenus pour l'onglet Contact -->


                    <div class="select_hous">
                        <div class="hous_business">

                                <p>
                                    Définir les heures d'ouverture
                                </p>

                            <div class="radio">
                                <div class="option_select">
                                        <div>
                                            <input type="radio" name="option" value="option2" id="option2">
                                            <label for="option2">24 hrs x 7 days</label>
                                                <br>
                                            <small>Round the clock support</small>
                                            <br>
                                        </div>
                                        <div>
                                            <input type="radio" name="option" value="option1" id="option1">
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
                                                        <input type="checkbox" id="lundi" data-target="content01">
                                                        <label for="lundi">Lundi</label>
                                                    </div>



                                                    <div class="grid">
                                                        <input type="checkbox" id="mardi" data-target="content02">
                                                        <label for="mardi">Mardi</label>
                                                    </div>

                                                    <div class="grid">
                                                        <input type="checkbox" id="mercredi" data-target="content03">
                                                        <label for="mercredi">Mercredi</label>
                                                    </div>

                                                    <div class="grid">
                                                        <input type="checkbox" id="jeudi" data-target="content04">
                                                        <label for="jeudi">Jeudi</label>
                                                    </div>

                                                    <div class="grid">
                                                        <input type="checkbox" id="vendredi" data-target="content05">
                                                        <label for="vendredi">Vendredi</label>
                                                    </div>

                                                    <div class="grid">
                                                        <input type="checkbox" id="samedi" data-target="content06">
                                                        <label for="samedi">Samedi</label>
                                                    </div>

                                                    <div class="grid">
                                                        <input type="checkbox" id="dimanche" data-target="content07">
                                                        <label for="dimanche">Dimanche</label>
                                                    </div>
                                                </div>



                                                <div id="content01" style="display: none;" >
                                                    <div class="day_number">
                                                        <div class="mar_lun">
                                                            <label for="">Lundi</label>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input type="time" name="" id="">
                                                        </div>
                                                        <div class="to">
                                                            <small>to</small>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input type="time" name="" id="">
                                                        </div>
                                                    </div>
                                                </div>





                                                <div id="content02" style="display: none;">
                                                    <div class="day_number">
                                                        <div class="mar_lun">
                                                            <label for="">Mardi</label>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input type="time" name="" id="">
                                                        </div>
                                                        <div class="to">
                                                            <small>to</small>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input type="time" name="" id="">
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
                                                            <input type="time" name="" id="">
                                                        </div>
                                                        <div class="to">
                                                            <small>to</small>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input type="time" name="" id="">
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
                                                            <input type="time" name="" id="" style="margin-left: 1px;">
                                                        </div>
                                                        <div class="to">
                                                            <small>to</small>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input type="time" name="" id="">
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
                                                            <input type="time" name="" id="" style="margin-left: -23px;">
                                                        </div>
                                                        <div class="to">
                                                            <small>to</small>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input type="time" name="" id="">
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
                                                            <input type="time" name="" id="" style="margin-left: -16px;">
                                                        </div>
                                                        <div class="to">
                                                            <small>to</small>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input type="time" name="" id="">
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
                                                            <input type="time" name="" id="">
                                                        </div>
                                                        <div class="to">
                                                            <small>to</small>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input type="time" name="" id="">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> {{--  fin de class="day" --}}


                                </div> {{--  fin de contenu 1 --}}


                                            <div id="content2" style="display: none;">

                                            </div>




                            </div> {{--  fin de class="radio"  --}}


                        </div>      {{--  fin de class ="hous_business" --}}

                    </div>  {{-- fin de class="select_hous" --}}

                </div>
            </div>







        {{-- </div> fin de ul --}}
    {{-- </div> fin de ul --}}


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





{{-- <button id="openModalBtn">Ouvrir la fenêtre</button> --}}


{{--
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Ajouter une Fête</h2>
                <form>
                <!-- Votre formulaire ici -->
                    <div class="row" id="date_name">
                        <div class="col-md-6">
                            <label for="Date" class="form-label">Date <span style="color:red ;">*</span></label>
                            <input type="date" id="Date" class="form-control" name="date" >
                        </div>
                    </div>
                    <div class="row" id="fete_name">
                        <div class="col-md-10">
                            <label for="Name" class="form-label">Name <span style="color:red ;">*</span></label>
                            <input type="text" id="Name" class="form-control" name="name" >
                        </div>
                    </div>
                    <div class="row" id="cancel_add">
                        <div >
                            <button aria-label="Close" id="cancel">Annuler</button>
                        </div>
                        <div >
                            <button class="add" type="submit">Envoyer</button>
                        </div>
                    </div>
                </form>
    </div>
</div>

<script>
    var openModalBtn = document.getElementById("openModalBtn");
    var modal = document.getElementById("myModal");
    var closeModal = document.getElementsByClassName("close")[0];

    openModalBtn.addEventListener("click", function() {
      modal.style.display = "block";
    });

    closeModal.addEventListener("click", function() {
      modal.style.display = "none";
    });

    window.addEventListener("click", function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    });
</script> --}}




<button >Ouvrir la fenêtre modale</button>

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
<div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h3>Ajouter une Fête</h3>
      <form id="myForm">
                        <div class="row" id="date_name">
                        <div class="col-md-6">
                            <label for="Date" class="form-label">Date <span style="color:red ;">*</span></label>
                            <input type="date" id="Date" class="form-control" name="date" >
                        </div>
                    </div>
                    <div class="row" id="fete_name">
                        <div class="col-md-10">
                            <label for="Name" class="form-label">Name <span style="color:red ;">*</span></label>
                            <input type="text" id="Name" class="form-control" name="name" >
                        </div>
                    </div>
                    <div class="row" id="cancel_add">
                        <div >
        <!-- Les champs du formulaire -->
        {{-- <button type="submit" id="submitButton">Soumettre</button>
        <button type="button" id="cancelButton">Annuler</button> --}}
        <div class="row" id="cancel_add">
            <div >
                <button type="button" class="cancel" aria-label="Close" id="cancelButton">Annuler</button>
            </div>
            <div >
                <button class="add" id="submitButton" type="submit">Envoyer</button>
            </div>
        </div>
      </form>
    </div>
</div>



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









</body>
</html>

