<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Models\Trainer;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::get();
        return view('admin.trainers.index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::get();
        return view('admin.trainers.create', compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trainer = new Trainer();
        if($request->name != NULL) {
            $trainer->name = $request->name;
        }else{
            return redirect()->back()->withError('Введите имя');
        }
        if($request->hasFile('photo')){
            $image = $request->file('photo');
            $image_path = $image->store('uploads', 'public');
            $trainer->photo = '/storage/'.$image_path;
        }else{
            return redirect()->back()->withError('Выберите фото');
        }
        $trainer->education = $request->education;
        $trainer->qua = $request->qua;
//        if($request->description != NULL) {
//            $trainer->description = $request->description;
//        }else{
//            return redirect()->back()->withError('Введите описание');
//        }
        $trainer->description = 'NULL';
        if($request->stage != NULL) {
            $trainer->stage = $request->stage;
        }else{
            return redirect()->back()->withError('Введите стаж');
        }
        if($request->directions != NULL) {
            $trainer->directions = $request->directions;
        }else{
            return redirect()->back()->withError('Введите направления');
        }
        if($request->achievements != NULL) {
            $trainer->achievements = $request->achievements;
        }else{
            return redirect()->back()->withError('Введите достижения');
        }
        if($request->age_category != NULL) {
            $trainer->age_category = $request->age_category;
        }else{
            return redirect()->back()->withError('Введите возрастную категорию');
        }
        if($request->section_id != NULL) {
            $trainer->section_id = $request->section_id;
        }else{
            return redirect()->back()->withError('Выберите секцию');
        }
        $trainer->save();
        return to_route('admin.trainer.index')->withSuccess('Тренер успешно добавлен!');
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
        $trainer = Trainer::find($id);
        $sections = Section::get();
        return view('admin.trainers.edit', compact('trainer','sections'));
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
        $trainer = Trainer::find($id);
        if($request->name != NULL) {
            $trainer->name = $request->name;
        }else{
            return redirect()->back()->withError('Введите имя');
        }
        if($request->hasFile('photo')){
            $image = $request->file('photo');
            $image_path = $image->store('uploads', 'public');
            $trainer->photo = '/storage/'.$image_path;
        }
        $trainer->education = $request->education;
        $trainer->qua = $request->qua;
//        if($request->description != NULL) {
//            $trainer->description = $request->description;
//        }else{
//            return redirect()->back()->withError('Введите описание');
//        }
        $trainer->description = 'NULL';

        if($request->stage != NULL) {
            $trainer->stage = $request->stage;
        }else{
            return redirect()->back()->withError('Введите стаж');
        }
        if($request->directions != NULL) {
            $trainer->directions = $request->directions;
        }else{
            return redirect()->back()->withError('Введите направления');
        }
        if($request->achievements != NULL) {
            $trainer->achievements = $request->achievements;
        }else{
            return redirect()->back()->withError('Введите достижения');
        }
        if($request->age_category != NULL) {
            $trainer->age_category = $request->age_category;
        }else{
            return redirect()->back()->withError('Введите возрастную категорию');
        }
        if($request->section_id != NULL) {
            $trainer->section_id = $request->section_id;
        }else{
            return redirect()->back()->withError('Выберите секцию');
        }
        $trainer->save();
        return to_route('admin.trainer.index')->withSuccess('Тренер успешно обнавлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trainer = Trainer::find($id);
        $trainer->delete();
        return to_route('admin.trainer.index')->withSuccess('Тренер удален!');
    }
}
