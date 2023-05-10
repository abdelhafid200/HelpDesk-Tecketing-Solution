@include('public.header')


            <div class="solution">
                <div>
                        <div class="mb-3" id="icone_bare1">
                            <input type="text"  id="search" placeholder="entrez ici le terme de recherche..." aria-label="Recherche" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="icone_search"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                </div>
                <div>
                    <h3 class="base2">Soumettre a ticket</h3>
                </div>
            </div>

                <!-- les selecte -->


                <div class="selecte">
                        <form id="myForm" action="{{ route('new_ticket') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-floating py-2 mb-3">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email1" name="email" placeholder="email">
                                    <label for="email1">Email</label>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- les information d'utilisateur --}}

                                <div id="client-fields" style="display: none;">
                                    <div class="form-floating py-2 mb-3">
                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" placeholder="first_name">
                                        <label for="first_name">Nom</label>
                                        @error('first_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-floating py-2 mb-3">
                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" placeholder="last_name">
                                        <label for="last_name">Prénom</label>
                                        @error('last_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-floating py-2 mb-3">
                                        <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="phone">
                                        <label for="phone">Phone</label>
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                {{-- les information d'utilisateur --}}


                                    <div class="form-floating py-2 mb-3">
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" placeholder="Sujet">
                                        <label for="subject">Sujet</label>
                                        @error('subject')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-floating py-2 mt-3">
                                        <select class="form-select" id="priority" name="priority" aria-label="Floating label select example">
                                            <option selected>Select une priorité</option>
                                            <option value="0">Urgent</option>
                                            <option value="1">Elevé</option>
                                            <option value="2"> Normal</option>
                                            <option value="3"> Bas</option>
                                        </select>
                                        <label for="priority">priorité</label>
                                    </div>

                                    <div class="form-floating py-2 mt-3">
                                        <textarea class="form-control" placeholder="Leave a comment here" name="description" id="description"></textarea>
                                        <label for="description">Comments</label>
                                    </div>

                                    <div class="py-5 ">
                                        <label class="">
                                            <span class="btn btn-secondary">
                                                <span>Select des fichier</span>
                                                <input type="file" name="file" id="file" class="hidden">
                                            </span>
                                        </label>
                                    </div>

                            <input class="btn btn-secondary mt-3" type="reset" value="Reset">
                            <input class="btn btn-primary mt-3" type="submit" value="Submit">
                    </form>
                </div>
                                            {{-- <!-- form3 --> --}}






                <!-- fin le css de select -->
        </div>
                <!-- Code java Script pour les selections  -->
                <!-- le code java script de textarea -->
                <script>
                        tinymce.init({
                            selector: '#description',
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

                {{-- Ajax --}}

                <script>
                    // const emailInput = document.getElementById('email');
                    // const nameInput = document.getElementById('first_name');
                    // const lastNameInput = document.getElementById('last_name');
                    // const phoneInput = document.getElementById('phone');
                    // const subjectInput = document.getElementById('subject');
                    // const descriptionInput = document.getElementById('description');
                    // const priorityInput = document.getElementById('priority');
                    // const fileInput = document.getElementById('file');

                    // emailInput.addEventListener('blur', () => {
                    // const email = emailInput.value;
                    // fetch(`/check-email?email=${email}`)
                    //     .then(response => response.json())
                    //     .then(data => {
                    //     if (data.exists) {
                    //         nameInput.disabled = true;
                    //         lastNameInput.disabled = true;
                    //         phoneInput.disabled = true;
                    //     } else {
                    //         nameInput.disabled = false;
                    //         lastNameInput.disabled = false;
                    //         phoneInput.disabled = false;
                    //     }
                    //     })
                    // });

                    // Get references to the relevant DOM elements
                        </script>
                    <script>

                    const emailInput = document.getElementById('email1');
                    const clientFields = document.getElementById('client-fields');

                    emailInput.addEventListener('blur', () => {
                        const email = emailInput.value;

                            // Vérifier si l'adresse email est valide
                        const isValidEmail = validateEmail(email);

                    // Si l'adresse email est valide, afficher les champs client
                    if (isValidEmail) {
                        clientFields.style.display = 'block';
                    } else {
                        clientFields.style.display = 'none';
                    }
                    });

                    function validateEmail(email) {
                    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    return regex.test(email);
                    }
</script>




                {{-- Ajax --}}


    {{-- <script>
            $(document).ready(function() {
                $('#select-form').change(function() {
                    var selectedForm = $(this).val();
                    $('.formulaire').hide();
                    $('#'+selectedForm).show();
                });
            });
	</script> --}}
            <footer class="footer2">
                    <div class="software1">
                        <p>HelpDesk Software</p>
                    </div>
            </footer>
