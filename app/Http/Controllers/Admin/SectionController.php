<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::get();
        return view('admin.sections.sections.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sections.sections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $section = new Section();
        if($request->hasFile('img')) {
            $image = $request->file('img');
            $image_path = $image->store('uploads', 'public');
            $section->img = '/storage/'.$image_path;
        }else{
            return redirect()->back()->withError('Выберите изображение');
        }
        if($request->title != NULL) {
            $section->title = $request->title;
        }else{
            return redirect()->back()->withError('Введите название');
        }
        if($request->excerpt != NULL) {
            $section->excerpt = $request->excerpt;
        }else{
            return redirect()->back()->withError('Введите краткое описание');
        }
        if($request->description != NULL) {
            $section->description = $request->description;
        }else{
            return redirect()->back()->withError('Введите описание');
        }
        if($request->hasFile('banner')) {
            $image = $request->file('banner');
            $image_path = $image->store('uploads', 'public');
            $section->banner = '/storage/'.$image_path;
        }else{
            return redirect()->back()->withError('Выберите баннер');
        }
        $section->save();
        return to_route('admin.section.index')->withSuccess('Секция успешно создана!');
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
        $section = Section::find($id);
        return view('admin.sections.sections.edit',compact('section'));
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
        $section = Section::find($id);
        if($request->hasFile('img')) {
            $image = $request->file('img');
            $image_path = $image->store('uploads', 'public');
            $section->img = '/storage/'.$image_path;
        }

        if($request->title != NULL) {
            $section->title = $request->title;
        }else{
            return redirect()->back()->withError('Введите название');
        }
        if($request->excerpt != NULL) {
            $section->excerpt = $request->excerpt;
        }else{
            return redirect()->back()->withError('Введите краткое описание');
        }
        if($request->description != NULL) {
            $section->description = $request->description;
        }else{
            return redirect()->back()->withError('Введите описание');
        }
        if($request->hasFile('banner')) {
            $image = $request->file('banner');
            $image_path = $image->store('uploads', 'public');
            $section->banner = '/storage/'.$image_path;
        }

        $section->save();

        return to_route('admin.section.index')->withSuccess('Секция успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section = Section::find($id);
        $section->delete();
        return to_route('admin.section.index')->withSuccess('Секция успешно удалена!');
    }
}
