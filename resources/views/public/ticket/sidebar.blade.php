



<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 200px;
background-color: #12344d !important;
padding-bottom: 200px !important;
margin-top: -47PX !important;
position: fixed;
top: 118px;
left: 0px;
z-index: 1;">
    {{-- <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="link-sidebar text-white">Sidebar</span>
    </a> --}}
    <hr>
    <ul class="nav nav-pills flex-column mb-auto" style="margin-left: -14px;">
        <li class="nav-item pb-2">
            <a href="{{url('/accueil')}}" class="nav-link active" aria-current="page">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                <span class="link-sidebar text-white">Accueil</span>
            </a>
        </li>
        <li class="pb-2">
            <a href="{{url('/knowldege_base')}}" class="nav-link  link-dark">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                <span class="link-sidebar text-white">Base de Connaissance</span>
            </a>
        </li>
        <li class="pb-2">
            <a href="{{url('/new_ticket')}}" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                <span class="link-sidebar text-white">Soumettre un Ticket</span>
            </a>
        </li>




        @if (Auth::check())

        <li class="pb-2">
            <a href="{{url('tickets/myticket')}}" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                <span class="link-sidebar text-white">Mes ticket</span>
            </a>
        </li>
        <li class="pb-2">
            <a href="{{url('logout')}}" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                <span class="link-sidebar text-white">Déconnecet</span>
            </a>
        </li>
        @else

        <li class="pb-2">
            <a href="#" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                <span class="link-sidebar text-white">S'identifier</span>
            </a>
        </li>
        <li class="pb-2">
            <a href="#" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                <span class="link-sidebar text-white">Créer Compte</span>
            </a>
        </li>

        <li class="pb-2">
            <a href="{{url('tickets/chercher')}}" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                <span class="link-sidebar text-white">chercher un ticket</span>
            </a>
        </li>

        <li class="pb-2">
            <a href="{{url('tickets/search-articles')}}" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                <span class="link-sidebar text-white">chercher un article</span>
            </a>
        </li>

        <li class="pb-2">
            <a href="{{ route('helpdesk.section') }}" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                <span class="link-sidebar text-white">Centre d'assistance</span>
            </a>
        </li>

        @endif
    </ul>
    <hr>

</div>


