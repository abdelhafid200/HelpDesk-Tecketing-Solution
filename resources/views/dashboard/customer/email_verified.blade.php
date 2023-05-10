<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/style2.css', 'resources/js/app.js'])
    @vite('resources/sass/app.scss')
</head>
<body>

    <div class="container page-confirm">
        <div class="mt-3 px-5">
            <h3>Bonjour {{ $name }}</h3> <br>
            <p>
                Félicitations, votre compte a été vérifié avec succès !
                Nous vous remercions de votre confiance. Pour des raisons de sécurité,
                nous vous recommandons de modifier votre mot de passe en cliquant sur le lien ci-dessous
                pour entrer un nouveau mot de passe."
            </p>
            <h3>voici votre E-mail : {{$email}}</h3>
        </div>
        <br>
        <div>
            <a href="{{ route('editPassword', ['hash' => $hash]) }}">Entrer un nouveau mot de passe</a>
            {{-- <a href="{{ route('editPassword') }}">Entrer un nouveau mot de passe</a> --}}
        </div>
    </div>


    </body>
    </html>
