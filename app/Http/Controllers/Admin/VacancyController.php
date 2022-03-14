<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vacancy;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacancies = Vacancy::get();
        return view('admin.vacancy.index', compact('vacancies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vacancy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vacancy = new Vacancy();
        $vacancy->title = $request->title;
        $vacancy->excerpt = $request->excerpt;
        $vacancy->text = $request->description;
        $vacancy->save();
        return to_route('admin.vacancy.index')->withSuccess('Вакансия успешно добавлена!');
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
        $vacancy = Vacancy::find($id);
        return view('admin.vacancy.edit', compact('vacancy'));
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
        $vacancy = Vacancy::find($id);
        $vacancy->title = $request->title;
        $vacancy->excerpt = $request->excerpt;
        $vacancy->text = $request->description;
        $vacancy->save();
        return to_route('admin.vacancy.index')->withSuccess('Вакансия успешно добавлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vacancy = Vacancy::find($id);
        $vacancy->delete();
        return to_route('admin.vacancy.index')->withSuccess('Вакансия удалена');
    }
}
