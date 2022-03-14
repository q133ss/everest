<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Day;
use App\Models\Time;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $days = [
            'Понедельник',
            'Вторник',
            'Среда',
            'Четверг',
            'Суббота',
            'Воскресенье'
        ];
        foreach($days as $day){
            DB::table('days')->insert([
                'day' => $day,
            ]);
        }

        $times = [
            '9:30',
            '10:00',
            '11:00',
            '12:00',
            '15:00',
            '16:00',
            '17:00',
            '18:00',
            '19:00',
            '20:00',
            '20:30',
        ];

        foreach($times as $time){
            DB::table('times')->insert([
                'time' => $time,
            ]);
        }

    }
}
