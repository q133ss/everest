<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Time;
use App\Models\Day;
use App\Models\Occupation;

class ScheduleController extends Controller
{
    public function index(){
        $days = Day::get();
        $times = Time::get();
        return view('schedule', compact('days', 'times'));
    }

    public function trainer($trainer_id){
        $days = Day::get();
        $times = Time::get();
        return view('schedule', compact('days', 'times', 'trainer_id'));
    }
}
