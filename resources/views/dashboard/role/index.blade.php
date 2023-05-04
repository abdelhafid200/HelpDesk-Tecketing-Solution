@extends('dashboard.layout.dashboard')

@section('content')
<div class="px-5">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <div>
            <h4 class="fw-bold fs-3">Rôles</h4>
            <p class="text-secondary mb-0">{{ $roles->count() }} roles</p>
        </div>
        <a class="btn btn-primary px-4 fw-medium" href="{{ route('dashboard.role.create') }}">Ajouter rôle</a>
    </div>
    @foreach ($roles as $role)
        <div class="card mb-3 @unless($role->is_touchable)bg-light border-light @endunless">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        @unless ($role->is_touchable)    
                        <div class="d-flex align-items-center mb-1 text-secondary column-gap-2">
                            <svg width="16" height="16" class="" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"></path>
                            </svg>
                            <small>Locked</small>
                        </div>
                        @endunless
                        <a class="link-dark text-decoration-none" href="{{ route('dashboard.role.view', ['id' => $role->id]) }}">
                            <h6 class="mb-1">{{ $role->name }}</h6>
                        </a>
                        <p class="text-secondary fs-7">{!! $role->description ?? '<i>Pas de description</i>'  !!}</p>
                        <div class="d-flex text-primary column-gap-1 align-items-center">
                            <svg height="18" width="18" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"></path>
                            </svg>
                            <small class="fw-medium">{{ $role->permissions->count() }} permissions associés</small>
                        </div>
                    </div>
                    @if ($role->is_touchable)    
                    <div class="d-flex align-items-center column-gap-3">
                        <a href="{{ route('dashboard.role.edit', ['id' => $role->id]) }}" class="btn btn-light border btn-sm fw-medium">Modifier</a>
                        <a href="{{ route('dashboard.role.delete', ['id' => $role->id]) }}" class="btn btn-danger border border-danger btn-sm fw-medium" onclick="return confirm('Vous voulez supprimer ce rôle ?')">Supprimer</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection