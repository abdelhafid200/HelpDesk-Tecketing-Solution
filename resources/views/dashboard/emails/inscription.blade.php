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
    <div class="container">
        <div>
            <img src="{{ asset('images/confirm.jpg')}}" alt="logo" style="width:200px;">
        </div>
        <div>
            Sujet : <h4>Confirmation de votre adresse e-mail</h4>
        </div>
        <div>
            <h3> Bonjour {{ $name }} </h3>
            <p>Nous avons bien reçu votre demande de confirmation d'adresse e-mail.</p>

            <p>Cliquez sur le lien ci-dessous pour confirmer votre adresse e-mail :</p>

                <a href="{{ $href }}" class="btn btn-primary">Confirmer votre Compte</a>

            <p>Si vous n'avez pas demandé cette confirmation, veuillez ignorer ce message.</p>
        </div>

        <div>
            Cordialement,
            <h4>Systém Help desk</h4>
        </div>
    </div>
</body>
</html>
