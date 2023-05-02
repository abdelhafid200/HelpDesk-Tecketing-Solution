@extends('dashboard.layout.master')

@section('main')
@include('dashboard.layout.sidebar')
<main>
    <div class="px-5 mt-5">
        @unless (auth()->user()->email_verified_at)
        <div class="alert alert-light alert-dismissible d-flex align-items-center column-gap-1 px-4 mb-4" role="alert">
            <div>
                Veuillez confirmer votre adresse e-mail pour finaliser votre inscription. Si vous n'avez pas reçu l'e-mail, <a class="text-decoration-none fw-medium" href="{{ route('verification.send') }}">renvoyer un autre e-mail</a>.
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endunless
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @yield('content')
    </div>
</main>
@endsection