@extends('public.layout.master')

@section('content')
<div class="container">
    <div class="row justify-content-center my-4">
        <div class="col-md-10 col-sm-12 col-xs-12">
            <form action="{{ route('user.auth') }}" method="POST" class="mb-3" id="email">
                @csrf
                <div class="border bg-white rounded-4 p-5">
                    <div><h1 class="fw-bold mb-3 text-primary">Help desk</h1></div>
                    <div class="row">
                        <div class="col">
                            <h3 class="mb-4">Se connecter a help desk</h3>
                            <div class="form-group mb-4">
                                <label for="login" class="form-label">E-mail</label>
                                <input type="email" name="email" class="form-control" id="login" placeholder="Votre adresse E-mail" value="{{ old('login') }}">
                                @error('email')
                                    <span class="text-danger error-message">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="form-label">Mot de Passe</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Votre mot de passe"> <br>
                                @error('password')
                                    <span class="text-danger error-message">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" id="style" class="form-control">Se connecter</button>            
                            <br><br>
                            <p class="ligne"> <span>Vous n'avez pas de compte ?</span> </p>
                            <br>
                            <div class="row" id="">
                                <div class="col-md-6" id="si_up">
                                    <a href="{{ route('user.create') }}">Créer a Compte</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/out2.png')}}" alt="equipe" class="w-100">
                            {{-- <img src="/dist/assets/svg/illustration-1.svg" alt="equipe" class="image_login"> --}}
            
                        </div>
                    </div>
            
                </div>
            </form>
        </div>
    </div>
</div>
    

{{-- @include('portail_client.footer') --}}

<div class="copyright">
    <small>Copyright  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-c-circle" viewBox="0 0 16 16">
        <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927
        2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0
    2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512Z"/>
</svg> -2023  tout droits réservés</small>
</div>

@endsection