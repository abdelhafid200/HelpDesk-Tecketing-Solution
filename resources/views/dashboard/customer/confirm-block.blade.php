
@extends('dashboard.layout.dashboard')

@section('title', 'Ajouter client')
@section('content')
    <div class="card">
        <div class="card-header">Confirmation de blocage</div>
        <div class="card-body">
            <p>Êtes-vous sûr de vouloir bloquer {{ $client->user->first_name }} {{ $client->user->last_name }} ?</p>
            <form action="{{ route('dashboard.customers.block', $client->id) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-danger">Bloquer</button>
                <a href="{{ route('dashboard.customers.index') }}" class="btn btn-secondary">Annuler</a>
            </form>
        </div>
    </div>
@endsection

