@extends('public.layout.master')
@section('content')
<div class="container">
    <div class="border bg-white rounded-4 p-5 my-5">
        <div class="row align-items-center g-5">
            <div class="col-md-6">
                <form method="POST" action="{{ route('user.store')}}" id="form_sign">
                    @csrf
                    <h1 class="text-primary mb-5 fw-bold">Inscrivez-vous pour Help Desk</h1>
                    <div class="row g-3">
                        <div class="col">
                            <div class="form-group mb-3">
                                <label for="first-name" class="form-label">Nom</label>
                                <input type="text" class="form-control" name="first_name" id="first-name" value="{{ old('first_name') }}" placeholder="Votre nom" required>
                                @error('first_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group mb-3">
                                <label for="last-name" class="form-label">Prénom</label>
                                <input type="text" class="form-control" name="last_name" id="last-name" value="{{ old('last_name') }}" placeholder="Votre prénom" required>
                                @error('last_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" value=" {{ old('email') }}" placeholder="Saisir un email" required>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone" class="form-label">Numéro de téléphone</label>
                        <input type="number" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" placeholder="votre téléphone" required>
                        @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="row">
                        <div class="col">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" name="password"  class="form-control" id="password" placeholder="Ecrire le mot de passe" required>
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="col">
                            <label for="password-confirmation" class="form-label">Confirmer mot de passe</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password-confirmation" placeholder="Confirmer votre mot de passe" required>
                        </div>
                    </div>
                    <div class="my-3">
                        <button type="submit" id="mg" class="btn btn-primary form-control">Créer Compte</button>
                    </div>
                </form>
                <p class="text-center"> Vous avez déjà un compte? <a class="text-success" href="{{url('login')}}">Se Connecter</a> </p>
            </div>
            <div class="col-md-6">
                <img src="{{asset('images/out3.jpg')}}" alt="equipe" class="w-100">
            </div>
        </div>
    </div>
</div>

<script>
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()
</script>
@endsection