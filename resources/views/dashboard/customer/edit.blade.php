
@extends('dashboard.layout.dashboard')

@section('title', 'Ajouter client')

@section('content')

@if (session()->has('message'))
    <div class="alert alert-info" role="alert" id="message">
        {{session()->get('message')}}
    </div>
@endif
<form action="{{ route('dashboard.customers.edit',['id'=> $client->id ])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="px-5">
        <h4 class="fw-bold fs-3 mb-4" id="title-client">Éditer un Client</h4>
        <div class="row">
            <div class="form-group col-md-6 position-relative mb-3 client-form2">
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ $client->user->first_name }}" placeholder="saisir le nom du client">
                <label for="first_name">Nom du client</label>
                @error('first_nameé')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-md-6 position-relative mb-3 client-form2">
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ $client->user->last_name }}" placeholder="saisir le prenom du client">
                <label for="last_name">Prénom du client</label>
                @error('last_name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

        </div>

        <div class="form-group position-relative mb-3 client-form">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $client->user->email }}" placeholder="saisir E-mail du client">
            <label for="email">E-mail du client</label>
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group position-relative mb-3 client-form">
            <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $client->user->phone }}" placeholder="Saisir le téléphone du client">
            <label for="phone">télephone du client</label>
            @error('phone')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group position-relative mb-3 client-form">
            <input type="text" class="form-control @error('adresse') is-invalid @enderror" id="adresse" name="adresse" value="{{ $client->adress }}" placeholder="Saisir l'adresse du client">
            <label for="adresse">Adresse du client</label>
            @error('adresse')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group position-relative mb-3 client-form">
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Ecrire une petite description à propos du client">{{ $client->description }}</textarea>
            <label for="description">Description</label>
            @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group position-relative mb-3 client-form">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Saisir le mot de passe du client">
            <label for="first_name">Mot de passe du client</label>
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group position-relative mb-3 client-form">
            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Confirmer le mot de passe du client">
            <label for="password_confirmation">Confirmation de mot de passe du client</label>
            @error('password_confirmation')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <button class="btn btn-primary px-4 fw-medium mt-4 mb-5" type="submit">Éditer Client</button>
        </div>

    </div>
</form>
@endsection
