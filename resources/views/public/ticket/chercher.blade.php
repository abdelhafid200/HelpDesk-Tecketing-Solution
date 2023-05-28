@extends('public.ticket.ticket')

@section('content')


        {{-- <div class="navbar-search">
            <nav class="navbar navbar-light bg-light" style="background-color: white !important;">
                <div class="container-fluid" > --}}
                    {{-- <a class="navbar-brand">
                        <img src="{{ asset('images/D_logo7.png') }}" alt="logo help desk" class="ms-3" style="width:65px;">
                    </a> --}}
                    <form method="POST" action=" {{ route('tickets.search_ticket') }} " class="search-ticket" style="">
                        @csrf
                        <input class="form-control me-2" type="search" placeholder="Search" value="{{ old('code') }}" name="code" style="width:500px;" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                {{-- </div>
            </nav>
        </div> --}}


@endsection
