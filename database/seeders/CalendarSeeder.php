<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('calendars')->insert([
            'name' => 'Temps de travail général',
            'description' => 'Le temps de travail créer par défault',
            'is_personalised' => true,
            'is_default' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $id = DB::table('calendars')->first()->id;
        
        $start = '08:00:00';
        $end = '18:00:00';

        $row = collect([ 'start' => $start, 'end' => $end, 'calendar_id' => $id ]);

        collect()->range(0, 6)->each(function ($day) use ($row) {
            DB::table('days')->insert($row->merge([ 'day' => $day ])->all());
        });

    }
}
