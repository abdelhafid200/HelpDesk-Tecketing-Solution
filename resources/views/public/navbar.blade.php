
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/style1.css', 'resources/js/app.js'])
    @vite('resources/sass/app.scss')
</head>
<body>




<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
    <a class="navbar-brand" href="#">HelpDesk</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Soumettre un ticket</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('login')}}">S'identifier</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('sign-up')}}">S'inscrire</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Solution
            </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{url('tickets/chercher')}}">cherche ticket</a></li>
            <li><a class="dropdown-item" href="{{url('tickets/search-articles')}}">Cherche article</a></li>
            <li><a class="dropdown-item" href="{{ route('helpdesk.section') }}">centre d'assistance</a></li>
        </ul>
        </li>

        <li class="nav-item" style="
        position: relative;
        right: 12p;
        left: 600px;">

            <a class="nav-link" href="#">
                <div>
                    Logo HelpDesk
                </div>
            </a>
        </li>

    </ul>
    </div>
</div>
</nav>

</body>
</html>
