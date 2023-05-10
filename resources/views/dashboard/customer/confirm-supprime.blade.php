
@extends('dashboard.layout.dashboard')

@section('title', 'Confirmer la Suppression')
@section('content')
    <div class="card">
        <div class="card-header">Confirmation de Suppression</div>
        <div class="card-body">
            <p>Êtes-vous sûr de vouloir Supprimer {{ $client->user->first_name }} {{ $client->user->last_name }} ?</p>
            <form action="{{ route('dashboard.customers.destroy', $client->id) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Supprimer</button>
                <a href="{{ route('dashboard.customers.index') }}" class="btn btn-secondary">Annuler</a>
            </form>
        </div>
    </div>
@endsection

