
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
                                        <input type="date" id="Date" class="form-control" name="date">
                                    </div>
                                </div>
                                <div class="row" id="fete_name">
                                    <div class="col-md-10">
                                        <label for="Name" class="form-label">Name <span style="color:red ;">*</span></label>
                                        <input type="text" id="Name" class="form-control" name="name_holiday">
                                    </div>
                                </div>


                                <div class="row" id="cancel_add">
                                    <div >
                                        <button type="reset" class="cancel" aria-label="Close" id="cancelButton">Annuler</button>
                                    </div>
                                    <div >
                                        <button class="add" id="submitButton" type="submit">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>

        {{-- @if ( $calendars->id==$holidays->calendar_id)
        <div>
            <table class="table table-striped">
                <tr>
                    <th>Dates</th> <th>name</th>
                </tr>
                @foreach ($holidays as $holiday)
                <tr class="col">
                    <td>
                        {{$holiday->date}}
                    </td>
                    <td>
                        {{$holiday->name}}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        @endif --}}

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
