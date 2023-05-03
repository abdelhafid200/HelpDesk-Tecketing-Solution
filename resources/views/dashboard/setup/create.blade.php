@extends('dashboard.layout.master')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="text-center my-5">
                <img height="50" src="https://help.sendinblue.com/hc/article_attachments/6450414165138/Zendesk-Logo.png">
            </div>
            <div class="badge text-bg-primary mb-2">Etape 1</div>
            <h2 class="fw-bold mb-3">Bienvenue! Veuillez créer un compte administrateur pour continuer la configuration</h2>
            <p class="text-secondary fs-6 pb-1 mb-4">Avant de pouvoir utiliser notre application, vous devez créer un compte administrateur.</p>
            <form action="{{ route('setup.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group position-relative mb-3">
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name" placeholder="Ecrire votre nom" value="{{ old('first_name') }}">
                            <label for="first_name">Nom</label>
                            @error('first_name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group position-relative mb-3">
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" placeholder="Ecrire votre prénom" value="{{ old('last_name') }}">
                            <label for="last_name">Prénom</label>
                            @error('last_name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group position-relative mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="example@domain.com" value="{{ old('email') }}">
                    <label for="email">Adresse e-mail</label>
                    @error('email')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group position-relative mb-3">
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="0X XX XX XX XX" value="{{ old('phone') }}">
                    <label for="phone">N° Téléphone</label>
                    @error('phone')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group position-relative mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Ecrire votre mot de passe">
                            <label for="password">Mot de passe</label>
                            @error('password')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group position-relative mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Confirmer votre mot de passe">
                            <label for="password_confirmation">Confirmé votre mot de passe</label>
                        </div>
                    </div>
                </div>
                <div class="form-group position-relative mb-4">
                    <input type="text" class="form-control @error('work') is-invalid @enderror" id="work" name="work" placeholder="Citer votre titre de travail" value="{{ old('work') }}">
                    <label for="work">Titre de travail</label>
                    @error('work')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <input type="hidden" name="scope" value="0">
                <input type="hidden" name="calendar" value="3">
                <div class="d-grid mb-5">
                    <button type="submit" class="btn btn-primary fw-medium py-2 fs-5 px-4 rounded-3">Créer compte</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection