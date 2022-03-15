<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Day;
use App\Models\Section;
use App\Models\Time;
use App\Models\Trainer;
use App\Models\Week;
use Illuminate\Http\Request;
use App\Models\Occupation;

class OccupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $occups = Occupation::get();
        return view('admin.occupations.index', compact('occups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trainers = Trainer::get();
        $weeks = Week::get();
        $days = Day::get();
        $times = Time::get();
        $directions = [
            1 => 'Секции единоборств',
            2 => 'Секции в тренажёрном зале',
            3 => 'Групповые тренировки'
        ];
        return view('admin.occupations.create', compact('trainers', 'weeks', 'days', 'times', 'directions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $occup = new Occupation();
        if($request->time != NULL) {
            $occup->time_spending = $request->time;
        }else{
            return redirect()->back()->withError('Введите время');
        }
        $occup->direction_id = $request->direction_id;
        $occup->section_id = $request->section_id;
        $occup->trainer_id = $request->trainer_id;
        $occup->week_id = $request->week_id;
        $occup->day_id = $request->day_id;
        $occup->time_id = $request->time_id;
        $occup->save();
        return to_route('admin.occup.index')->withSuccess('Занятие успешно добавлено!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $occup = Occupation::find($id);
        $sections = Section::get();
        $trainers = Trainer::get();
        $weeks = Week::get();
        $days = Day::get();
        $times = Time::get();
        $directions = [
            1 => 'Секции единоборств',
            2 => 'Секции в тренажёрном зале',
            3 => 'Групповые тренировки'
        ];
        return view('admin.occupations.edit', compact('occup','sections', 'trainers', 'weeks', 'days', 'times', 'directions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $occup = Occupation::find($id);
        if($request->time != NULL) {
            $occup->time_spending = $request->time;
        }else{
            return redirect()->back()->withError('Введите время');
        }
        $occup->direction_id = $request->direction_id;
        $occup->section_id = $request->section_id;
        $occup->trainer_id = $request->trainer_id;
        $occup->week_id = $request->week_id;
        $occup->day_id = $request->day_id;
        $occup->time_id = $request->time_id;
        $occup->save();
        return to_route('admin.occup.index')->withSuccess('Занятие успешно обновлено!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $occup = Occupation::find($id);
        $occup->delete();
        return to_route('admin.occup.index')->withSuccess('Занятие удалено!');
    }
}
