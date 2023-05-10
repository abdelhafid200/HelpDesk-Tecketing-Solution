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

    <div class="page-verification">
        @if (session()->has('message_password'))
        <div class="alert alert-info" role="alert" id="message_password">
            {{session()->get('message_password')}}
        </div>
        @endif
            <h3>votre compte est vérifier </h3>
            <small>veuillez inserer un nouveaux mot de passe</small>
                <form action="{{ route('updatePassword', ['hash' => $hash]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="password-change">
                        <div class="form-floating col-md-6 mb-3">
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}" placeholder="saisir votre nom ">
                            <label for="first_name">Nom du client</label>
                            @error('first_nameé')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating col-md-6 mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="" placeholder="Saisir votre mot de passe ">
                            <label for="password">Mot de passe du client</label>
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-floating col-md-6 mb-3">
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Confirmer votre mot de passe">
                            <label for="password_confirmation">Confirmation de mot de passe du client</label>
                            @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">

                            <button class="btn btn-primary col-md-5 ms-2">Envoyer</button>
                        </div>
                    </div>
                </form>
    </div>
    </body>
    </html>
