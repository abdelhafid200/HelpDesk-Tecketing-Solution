@extends('dashboard.layout.dashboard')


@section('title', 'Calendar')

@section('content')
@include('dashboard.horaire.headerTemporer')

<div class="horaire">

    <div class="add_hours">
        <div class="title_hours">
            <h1>Heures de travail</h1>
        </div>
        <div class="button_hours">
            {{-- <a href="newCalendar">Ajouter des heures d'ouverture</a> --}}
            <a href="{{route('dashboard.create')}}">Ajouter des heures d'ouverture</a>
        </div>
    </div>

@if (session()->has('message_supprime'))
    <div class="alert alert-info" role="alert" id="message_supprime">
        {{session()->get('message_supprime')}}
    </div>
@endif
@if (session()->has('message_ajoute'))
    <div class="alert alert-info" role="alert" id="message_ajoute">
        {{session()->get('message_ajoute')}}
    </div>
@endif
@if (session()->has('message_update'))
    <div class="alert alert-info" role="alert" id="message_update">
        {{session()->get('message_update')}}
    </div>
@endif

@foreach ($calendars as $calendar)
    <div class="name_casablanca">
        <div>
            <a href="consulter/{{$calendar->id}}" class="href_casa">
                <div >
                    <div class="name_calendar">
                        <span>{{$calendar->name}}</span>
                    </div>
                    <div class="Casablanca">
                        <small>(GMT+01:00) Casablanca</small> &nbsp; . &nbsp; <span>nombre de group associated</span>
                    </div>
                </div>
            </a>
        </div>
        <div>
            <div class="btn-edit">
                <a href="calendar/edit/{{$calendar->id}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                    </svg>
                </a>
            </div>
            {{-- <form action="/calendar" method="post"> --}}
            <form action="{{ route('dashboard.calendar.destroy', ['id' => $calendar->id]) }}" method="post">
                @csrf
                @method('delete')
                    <button type="submit" class="btn-delete">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                        </svg>
                        </span>
                    </button>

                {{-- {{$holiday}} --}}

            </form>
        </div>


    </div>

<br>
@endforeach


</div>
@endsection


