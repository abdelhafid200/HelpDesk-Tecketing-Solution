
@extends('dashboard.layout.dashboard')
@section('title', 'cansulter')

@section('content')
<div class="">


    @include('dashboard.horaire.headerTemporer')

    <div class="consulter">
        <div class="consult_calendrier">
            <div class="calendrier-svg">
                <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" fill="currentColor" class="bi bi-calendar-check mt-neg-4" viewBox="0 0 16 16">
                        <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                    </svg>
                    <span>Calendrier</span>
                </h3>
            </div>
            <div class="edit-supp">
                <div class="btn-edit-consulte">
                    {{-- <a href="/calendar/edit/{{$calendar->id}}"> --}}
                    <a href="{{route('dashboard.edit',['id'=>$calendar->id])}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg>
                        Modifier
                    </a>
                </div>
                {{-- <form action="/calendar" method="post"> --}}
                    <div  class="btn-supp-consulte">
                        <form action="{{ route('dashboard.calendar.destroy', ['id' => $calendar->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg>
                                <span> Supprimer </span>
                            </button>

                            {{-- {{$holiday}} --}}

                        </form>
                    </div>
            </div>
        </div>

        <div class="nom_bio">
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                </svg>
                Nom : {{ $calendar->name }}
            </p>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                </svg>
                Description : {{ $calendar->description }}
            </p>
        </div>

        <div class="jours">
            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="30" fill="currentColor" class="bi bi-calendar-day" viewBox="0 0 16 16">
                    <path d="M4.684 11.523v-2.3h2.261v-.61H4.684V6.801h2.464v-.61H4v5.332h.684zm3.296 0h.676V8.98c0-.554.227-1.007.953-1.007.125 0 .258.004.329.015v-.613a1.806 1.806 0 0 0-.254-.02c-.582 0-.891.32-1.012.567h-.02v-.504H7.98v4.105zm2.805-5.093c0 .238.192.425.43.425a.428.428 0 1 0 0-.855.426.426 0 0 0-.43.43zm.094 5.093h.672V7.418h-.672v4.105z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
                <span>Jours :</span>
            </h2>
        </div>



        <div>
            <table class="table table-hover" id="table_consult" border="">
                <tr>
                    <th>Jour</th>
                    <th>Heure de début</th>
                    <th>Heure de fin</th>
                </tr>
                @foreach ($days as $day)
                <tr class="col">


                    <td>
                        @switch($day->day)
                        @case(0) lundi

                            @break
                        @case(1) Mardi

                            @break
                        @case(2) mercredi

                            @break
                        @case(3) jeudi

                            @break
                        @case(4) vendredi

                            @break
                        @case(5) samedi

                            @break
                        @default dimanche


                    @endswitch
                    </td>
                    <td>{{ $day->start }}</td>
                    <td>{{ $day->end }}</td>
                </tr>
                @endforeach
            </table>
        </div>


        <div class="vacances">
            <h2>
                <img src="https://img.icons8.com/external-filled-outline-lima-studio/64/null/external-holiday-calendar-filled-outline-lima-studio.png"/>

            <span>Fêtes :</span>
            </h2>
        </div>
        <div class="tab_fete">
            <table class="table table-hover" id="table_consult" border="">
                <tr>
                    <th>Date</th>
                    <th>Nom</th>
                </tr>
                @foreach ($holidays as $holiday)
                    <tr>
                        <td>{{ $holiday->date }}</td>
                        <td>{{ $holiday->name }}</td>
                    </tr>
                @endforeach
            </table>
        </div>



    </div>

</div>
@endsection





