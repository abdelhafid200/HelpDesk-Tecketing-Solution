<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\Day;
use App\Models\Holiday;
use Illuminate\Http\Request;

class CalendarController extends Controller
{

    public function calendar(){
        $calendars = Calendar::get(); // Récupérer tous les calendriers depuis la base de données
        return view('dashboard.horaire.calendar', ['calendars' => $calendars]);
    }
    public function testHoraire(){
        return view('dashboard.horaire.test');
    }
    public function newCalendar(){
        return view('dashboard.horaire.newCalendar')->with('days', Day::get())
        ->with('holidays', Holiday::get())
        ->with('calendars', Calendar::get());
    }
    public function store1(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'schedule'=>'required|array',
            'date'=>'required',
            'name_holiday'=>'required',
            'option'=>'required|in:0,1'
        ]);
        // stocker les données de calendrier
        $calendar = new Calendar();
        $calendar->name =$request->input('name');
        $calendar-> description = $request->input('description');
        $calendar-> is_personalised = $request->input('option');
        $calendar->save();

        // stocker les données de days
        $calendarId = $calendar->id; // ID du calendrier
        $dayOfWeeks = [
            'monday' => 0,
            'tuesday' => 1,
            'wednesday' => 2,
            'thursday' => 3,
            'friday' => 4,
            'saturday' => 5,
            'sunday' => 6
        ];
    foreach ($dayOfWeeks as $dayOfWeek=>$day) {
        $start = $request->input('schedule.'.$dayOfWeek.'.start'); // Récupérer l'heure de début spécifique au jour de la semaine
        $end = $request->input('schedule.'.$dayOfWeek.'.end'); // Récupérer l'heure de fin spécifique au jour de la semaine
        if (!empty($start)) {
            $dayEntry = new Day();
            $dayEntry->calendar_id = $calendarId;
            $dayEntry->day = $day;
            $dayEntry->start = $start;
            $dayEntry->end = $end;
            $dayEntry->save();
        }
    }
    // stock les données de fêtes
    $holidays = new Holiday();
    $holidays->date = $request->input('date');
    $holidays->name = $request->input('name_holiday');
    $holidays->calendar_id = $calendarId;
    $holidays->save();

    return redirect('/calendar');
}

    public function consulter($id){
        $calendar = Calendar::findOrFail($id);
        $days = Day::where('calendar_id', $id)->get();
        $holidays = Holiday::where('calendar_id', $id)->get();

        return view('dashboard.horaire.consulter', compact('calendar', 'days', 'holidays'));
    }
    public function edit($id){
        $calendar = Calendar::findOrFail($id);
        $holiday = Holiday::where('calendar_id', $id)->firstOrFail();
        $day = Day::where('calendar_id', $id)->firstOrFail();

        return view('dashboard.horaire.edit')
            ->with('calendar', $calendar)
            ->with('day', $day)
            ->with('holidays', $holiday);
    }

    public function update(Request $request, $id){

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required',
            'name_holiday' => 'required',
            'schedule' => 'required|array',
        ]);
        Calendar::where('id', $id)->update([

            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'is_personalised' => $request->input('option'),
        ]);
        Holiday::where('calendar_id', $id)->update([
            'name' => $request->input('name_holiday'),
            'date' => $request->input('date'),
            // Autres champs des jours fériés à mettre à jour
        ]);
        $dayOfWeeks = [
        'monday' => 0,
        'tuesday' => 1,
        'wednesday' => 2,
        'thursday' => 3,
        'friday' => 4,
        'saturday' => 5,
        'sunday' => 6
    ];

        foreach ($dayOfWeeks as $dayOfWeek => $day) {
            $start = $request->input('schedule.'.$dayOfWeek.'.start');
            $end = $request->input('schedule.'.$dayOfWeek.'.end');

            if (!empty($start)) {
                Day::updateOrCreate(
                    [
                        'calendar_id' => $id,
                        'day' => $day
                    ],
                    [
                        'start' => $start,
                        'end' => $end
                    ]
            );
        }
    }

        return redirect('/calendar')->with('message', 'Modifications enregistrées avec succès !');

    }

    public function destroy($id){

        Calendar::where('id', $id)->delete();
        return redirect('/calendar')->with('message', 'Suppresion appliqués avec succès !');
    }

}
