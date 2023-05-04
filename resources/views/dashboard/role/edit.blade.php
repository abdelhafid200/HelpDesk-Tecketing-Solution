@extends('dashboard.layout.dashboard')

@section('title', 'Ajouter rôle')

@section('content')
<div class="px-5">
    <h4 class="fw-bold fs-3 mb-4">Modifier rôle</h4>
    <form action="{{ route('dashboard.role.update', ['id' => $role->id])}}" method="POST">
        @csrf
        <div class="form-group position-relative mb-3">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $role->name) }}" placeholder="Saisir le nom du rôle">
            <label for="name">Nom du rôle</label>
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group position-relative mb-3">
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Ecrire une petite description à propos du rôle">{{ old('description', $role->description) }}</textarea>
            <label for="description">Description</label>
            @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <h5 class="fw-bold">Permissions</h5>
            <p class="text-secondary">Veuillez sélectionner les permissions appropriées pour ce rôle lors de sa création en utilisant le formulaire de création de rôle dans le panneau d'administration.</p>
            @error('permissions')
                <p class="text-danger fw-medium">{{ $message }}</p>
            @enderror
        </div>
        @foreach ($permissions as $category => $categoryPermissions)
        <div class="row gx-4 mb-3">
            <div class="col-md-2">
                <div class="border-end h-100 pe-4">
                    <h5>@lang('permission/category.' . $category)</h5>
                </div>
            </div>
            <div class="col-md-10">
                @foreach ($categoryPermissions as $index => $permission)
                <div class="form-check mb-2">
                    <input class="form-check-input" name="permissions[]" type="checkbox" value="{{ $permission->id }}" id="permission-{{ $permission->id }}" @checked(in_array($permission->id, old('permissions', $role->permissions->pluck('id')->toArray())))>
                    <label class="form-check-label" for="permission-{{ $permission->id }}">
                        <small>{{ $permission->code }}</small>
                        @error('permissions.' . $index)
                        <p class="text-danger fw-medium">{{ $message }}</p>
                        @enderror
                    </label>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
        <button class="btn btn-primary px-4 fw-medium mt-4 mb-5" type="submit">Modifier rôle</button>
    </form>
</div>
@endsection