<div class="">

    @include('public.header')

        <div class="bare_search" id="">
            <h1>Bonjour, Comment pouvons-nous vous aider</h1>
            <div class="mb-3" id="icone_bare">
                <input type="text"  id="search" placeholder="entrez ici le terme de recherche..." aria-label="Recherche" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="icone_search"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>


        <div class="accueil1">
                    <div class="browse">
                        <a href="" class="href">
                                {{-- <div class=""><img src="helpticket.png" alt="light" class="brow_light"></div> --}}
                                <div class=""><img src="{{ asset('images/helpticket.png') }}" alt="light" class="brow_light"></div>
                                <div>
                                    <h6>Browse articles</h6>
                                    <p>Explore how-To's and learn best practices from our knowledge base</p>
                                </div>
                        </a>
                    </div>
                    <div class="submit">
                        <a href="{{url('/new_ticket')}}" class="href">
                                {{-- <div class=""><img src="helpticket.png" alt="" class="brow_light"></div> --}}
                                <div class=""><img src="{{ asset('images/helpticket.png') }}" alt="image" class="brow_light"></div>
                                <div>
                                    <h6>Submit a ticket</h6>
                                    <p>Describe your issue by filling up the support ticket form</p>
                                </div>
                        </a>
                    </div>
        </div>

        <div class="accueil2">
            <div class="cherche_article">
                <a href="{{url('/knowldege_base')}}" class="href">
                    {{-- <div><img src="helpticket.png" alt="" class="brow_light"></div> --}}
                    <div><img src="{{ asset('images/helpticket.png') }}" alt="" class="brow_light"></div>
                    <div>
                        <h6>Base de connaissance</h6>
                        <p>Default solution category, feel free to edit or delete it.</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="software1">
            <p>HelpDesk Software</p>
        </div>


</div>
