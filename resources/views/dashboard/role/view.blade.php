@extends('dashboard.layout.dashboard')

@section('title', $role->name)

@section('content')
<div class="px-5">
    <span class="badge bg-primary mb-2">Role</span>
    <h4 class="fw-bold fs-3">{{ $role->name }}</h4>
    <p class="text-secondary mb-4">{{ $role->description }}</p>
    <h6 class="mb-3">The users who holde this role can :</h6>
    @foreach ($role->permissions as $permission)
    <div class="d-flex align-items-center column-gap-2 mb-2">
        <svg class="text-primary" height="19" width="19" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
        </svg>
        <small class="text-dark">{{ $permission->code }}</small>
    </div>
    @endforeach
</div>
@endsection