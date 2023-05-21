

                <div id="mymodal" class="Modal">
                    <div class="content-modal">
                        <span class="close">&times;</span>
                        <div class="position-relative" style="left:60PX; bottom:-20px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-folder-plus me-2" viewBox="0 0 16 16">
                                <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2Zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672Z"/>
                                <path d="M13.5 9a.5.5 0 0 1 .5.5V11h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V12h-1.5a.5.5 0 0 1 0-1H13V9.5a.5.5 0 0 1 .5-.5Z"/>
                            </svg>
                            <span class="my-class" >
                                Nouveaux Section
                            </span>
                        </div>
                        <div class="px-5 pt-5">
                            <form action=" {{ route('dashboard.section.store') }} " method="POST" id="myform">
                                @csrf
                                <div class="mb-3 form-floating">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nom de Section">
                                    <label for="name">Nom de la section<span class="text-danger ms-1">*</span></label>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" name="description" placeholder="" id="description"></textarea>
                                    <label for="description">Une petite description</label>
                                </div>

                                <div class="row" id="add_cancel">
                                    <div>
                                        <button type="reset" class="me-2 btn btn-secondary" aria-label="close" id="buttonReset">Annuler</button>
                                    </div>
                                    <div>
                                        <input type="submit" value="ajouter" class="btn btn-primary" id="buttonSubmit">
                                        {{-- <button class="btn btn-primary" id="buttonSubmit" type="submit">Envoyer</button> --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



        <script>
                const modal = document.getElementById('mymodal');
                const button = document.getElementById('MyButton');
                const form = document.getElementById('myform');
                const submitButton = document.getElementById('buttonSubmit');
                const cancelButton = document.getElementById('buttonReset');
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



{{--
    <script>
    const modal = document.getElementById('mymodal');
    const button = document.getElementById('MyButton');
    const form = document.getElementById('myform');
    const submitButton = document.getElementById('buttonSubmit');
    const cancelButton = document.getElementById('buttonReset');
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

    </script> --}}
