
    <div id="mymodal_ticket" class="Modal_ticket">
            <div class="content-modal3">
                <span class="close">&times;</span>
                <div class="position-relative" style="left:60PX; bottom:-20px;">

                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat-left-dots-fill pe-2" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>

                    <span class="my-class" >
                        Nouveaux Message
                    </span>
                </div>
                <div class="px-5 pt-5">
                    <form action="{{ route('tickets.store', ['id'=> $ticket->id]) }}" method="POST" id="myform_ticket">
                        @csrf


                        <div class="form-group position-relative mb-3 client-form">
                            <textarea class="form-control @error('description') is-invalid @enderror" name="response" id="response" placeholder="écrire un message à l'agent " style="height: 200px;">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end pe-2" id="">
                            <div>
                                <button type="reset" class="me-2 btn btn-secondary" aria-label="close" id="buttonReset_ticket">Annuler</button>
                            </div>
                            <div>
                                {{-- <input type="submit" value="Envoyer" class="btn btn-primary" id="buttonSubmit_ticket"> --}}
                                <button type="submit" value="Envoyer" class="btn btn-primary" id="buttonSubmit_ticket">
                                    <span class="me-1">Envoyer</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                                    </svg>
                                </button>
                                {{-- <button class="btn btn-primary" id="buttonSubmit" type="submit">Envoyer</button> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
                const modal = document.getElementById('mymodal_ticket');
                const button = document.getElementById('Mybutton_ticket');
                const form = document.getElementById('myform_ticket');
                const submitButton = document.getElementById('buttonSubmit_ticket');
                const cancelButton = document.getElementById('buttonReset_ticket');
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


    <script>
            tinymce.init({
                selector: '#response',
                height: 300,
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



{{--
<p>
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Envoyer Un Message
    </a> --}}
    {{-- <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Button with data-bs-target
    </button>
</p>

--}}



{{-- <div class="collapse" id="collapseExample">
                        <div class="">

                            <form action="{{ route('tickets.store', ['id'=> $ticket->id]) }}" method="post">
                                @csrf
                                <div class="form-floating py-2 mt-3">
                                    <textarea class="form-control" placeholder="Leave a comment here" name="response" id="response"></textarea>
                                    <label for="response">Comments</label>

                                    <input type="submit" value="Envoyer" class="btn btn-primary mt-4">
                                </div>

                            </form>



                        </div>
                    </div> --}}
