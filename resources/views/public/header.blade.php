<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="css.style1.css"> --}}

    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdn.tiny.cloud/1/t6xa714v755aswmvia48nmkwtfmqjmhf27eme42iukkkjx44/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- language --}}

    @vite(['resources/css/style1.css', 'resources/js/app.js'])
    @vite('resources/sass/app.scss')

</head>
{{--
<body class="body">
    <!-- le navbar -->
    <div id="myHeader" class="header">
        <nav class="navbar">
            <div>
                <img src="{{ asset('images/help-desk.png') }}" alt="logo help desk" class="logo1">
            </div>
            <div>
                <a href="{{url('/')}}" class="titre1" id="home">Accueil</a>
                <!-- <a href="#" class="titre1" id="home">Accueil</a> -->
                <a href="{{url('/knowldege_base')}}" class="titre1" id="knowldege_base">Base de connaissance</a>
                <a href="{{url('/new_ticket')}}" class="titre1" id="submite_ticket">soumettre un ticket</a>
                <a href="{{url('/login')}}" class="titre1" id="identifier">S'identifier </a>
                <a href="{{url('/sign-up')}}" class="titre1" id="creer_compte">Créer compte</a>


            </div>
        </nav>
    </div>


    <script>
        window.onscroll = function() {
            myFunction()
        };
        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;
        function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
        }
    </script> --}}



<nav class="navbar navbar-expand-lg navbar-light bg-light" style="
position: fixed;
top: 0;
width: 100%;
z-index: 3;
">
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
            left: 555px;">

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

    {{-- <script>
        window.onscroll = function() {
            myFunction()
        };
        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;
        function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
        }
    </script> --}}
