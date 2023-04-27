@include('portail_client.header')


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

                                <div>
                                    <h2>Entrer en contact</h2>
                                </div>
                                <div class="select_option">
                                    <select class="form-select" id="select-form" aria-label="Default select example">
                                    <option selected>Choisissez une option</option>
                                        <option value="form1">poser une question</option>
                                        <option value="form2">signaler un problème</option>
                                        <option value="form3">exiger le statut</option>
                                    </select>
                                </div>


                                <!-- Poser une question -> debut  -->


                                <div class="formulaire" id="form1" style="display: none;">
                                    <form class="label-form" id="">
                                        <div class="row mb-3">
                                                <label for="inputrequest1" class="col-sm-3 col-form-label ">Enter your email address</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputrequest1">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="" placeholder="votre Nom">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                                <label for="inputSubject1" class="col-sm-3 col-form-label">Subject</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputSubject1">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                                <label for="mytextarea" class="col-sm-3 col-form-label">Description</label>
                                            <div class="col-sm-12" id="textarea">
                                                <textarea id="mytextarea"></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control"  type="file" id="formFileMultiple1" multiple>
                                        </div>
                                        <br>
                                        <input class="btn btn-secondary" type="reset" value="Reset">
                                        <input class="btn btn-primary" type="submit" value="Submit">

                                    </form>
                                </div>


                                <!-- Poser une question -> Fin  -->




                                <div class="formulaire" id="form2" style="display: none;">
                                    <form class="label-form" id="">
                                        <div class="row mb-3">
                                                <label for="inputrequest2" class="col-sm-3 col-form-label ">Requester</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputrequest2">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="" placeholder="votre Nom">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                                <label for="inputSubject2" class="col-sm-3 col-form-label">Subject</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputSubject2">
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                                <label for="inputtype2" class="col-sm-3 col-form-label">Type</label>
                                            <div class="col-sm-10">
                                                <select class="form-select form-control" aria-label="Default select example">
                                                    <option selected>Choisir</option>
                                                    <option value="1">Question</option>
                                                    <option value="2">Incident</option>
                                                    <option value="3">Problem</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                                <label for="inputpriority2" class="col-sm-3 col-form-label">priority</label>
                                            <div class="col-sm-10">
                                                <select class="form-select  form-control" aria-label="Default select example" id="inputpriority2">
                                                    <option selected></option>
                                                    <option value="1">Low</option>
                                                    <option value="2">Medium</option>
                                                    <option value="3">Hight</option>
                                                    <option value="4">Ugent</option>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="row mb-3">
                                                <label for="mytextarea" class="col-sm-3 col-form-label">Description</label>
                                            <div class="col-sm-12" id="textarea">
                                                <textarea id="mytextarea"></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                                <label for="inputreference2" class="col-sm-3 col-form-label">Reference Number</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="inputreference2">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <input class="form-control" id="file" type="file" id="formFileMultiple2" multiple>
                                        </div>
                                        <br>
                                        <input class="btn btn-secondary" type="reset" value="Reset">
                                        <input class="btn btn-primary" type="submit" value="Submit">
                                    </form>
                                </div>

                                            <!-- form3 -->

                                <div class="formulaire" id="form3" style="display: none;">
                                    <form class="label-form" id="">
                                        <div class="row mb-3">
                                                <label for="inputrequest3" class="col-sm-3 col-form-label ">Requester</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputrequest3">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="" placeholder="votre Nom">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                                <label for="inputSubject3" class="col-sm-3 col-form-label">Subject</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputSubject3">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                                <label for="mytextarea" class="col-sm-3 col-form-label">Description</label>
                                            <div class="col-sm-12" id="textarea">
                                                <textarea id="mytextarea"></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control" id="file" type="file" id="formFileMultiple3" multiple>
                                        </div>

                                        <div class="row mb-3">
                                                <label for="inputreference3" class="col-sm-3 col-form-label">Reference Number</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="inputreference3">
                                            </div>
                                        </div>
                                        <br>
                                        <input class="btn btn-secondary" type="reset" value="Reset">
                                        <input class="btn btn-primary" type="submit" value="Submit">

                                        <!-- <div class="textarea">
                                            <textarea id="mytextarea"></textarea>
                                        </div> -->

                                    </form>
                                </div>




                <!-- fin le css de select -->
            </div>
                <!-- Code java Script pour les selections  -->
                <!-- le code java script de textarea -->
                <script>
                        tinymce.init({
                            selector: '#mytextarea',
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


    <script>
            $(document).ready(function() {
                $('#select-form').change(function() {
                    var selectedForm = $(this).val();
                    $('.formulaire').hide();
                    $('#'+selectedForm).show();
                });
            });
	</script>
            <footer class="footer2">
                    <div class="software1">
                        <p>HelpDesk Software</p>
                    </div>
            </footer>
