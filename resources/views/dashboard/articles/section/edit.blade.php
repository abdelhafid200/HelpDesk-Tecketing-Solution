@extends('dashboard.layout.dashboard')

@section('title', 'Ajouter client')

@section('content')

        <form action=" {{ route('dashboard.section.update', ['id'=> $section->id]) }} " method="POST" id="">
            @csrf
            @method('PUT')
                <div class="d-flex justify-content-between">
                    <div class="position-relative" style="left:60PX; bottom:-20px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-folder-plus me-2" style="margin-top: -8px;" viewBox="0 0 16 16">
                            <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2Zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672Z"/>
                            <path d="M13.5 9a.5.5 0 0 1 .5.5V11h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V12h-1.5a.5.5 0 0 1 0-1H13V9.5a.5.5 0 0 1 .5-.5Z"/>
                        </svg>
                        <span class="my-class" >
                            Edit Section
                        </span>
                    </div>
                    <div class="pe-5">
                        <input type="submit" value="Editer Section" class="btn btn-primary" >
                    </div>
                </div>
                <div class="px-5 pt-5">
                    <div class="form-group position-relative mb-3 client-form">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $section->nom }}" name="name" placeholder="saisir le nom de la Section">
                        <label for="name">Nom </label>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group position-relative mb-3 client-form">
                        <textarea class="form-control @error('description') is-invalid @enderror"  name="description" id="description"  placeholder="Ecrire une petite description à propos du section"> {{ $section->description  }} {{ old('description') }}</textarea>
                        <label for="description">Description</label>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
        </form>


@endsection
