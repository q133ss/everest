<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SectionCategory;

class SectionCat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = SectionCategory::get();
        return view('admin.section_cat.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.section_cat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $section = new SectionCategory();
        if($request->name != NULL) {
            $section->name = $request->name;
        }else{
            return redirect()->back()->withError('Введите название');
        }
        if($request->hasFile('img')) {
            $image = $request->file('img');
            $image_path = $image->store('uploads', 'public');
            $section->img = '/storage/'.$image_path;
        }else{
            return redirect()->back()->withError('Выберите изображение');
        }
        $section->save();
        return to_route('admin.section_cat.index')->withSuccess('Категория успешно создана');
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
        $cat = SectionCategory::find($id);
        return view('admin.section_cat.edit', compact('cat'));
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
        $cat = SectionCategory::find($id);
        if($request->name != NULL) {
            $cat->name = $request->name;
        }else{
            return redirect()->back()->withError('Введите название');
        }
        if($request->hasFile('img')){
            $image = $request->file('img');
            $image_path = $image->store('uploads', 'public');
            $cat->img = '/storage/'.$image_path;
        }
        $cat->save();
        return to_route('admin.section_cat.index')->withSuccess('Категория успешно изменина');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = SectionCategory::find($id);
        $cat->delete();
        return to_route('admin.section_cat.index')->withSuccess('Категория удалена!');
    }
}
