<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::get();
        return view('admin.gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo = new Gallery();
        if($request->hasFile('img')) {
            $img_path = $request->file('img')->store('uploads', 'public');
            $photo->src = '/storage/'.$img_path;
        }else{
            return redirect()->back()->withError('Выберите фото');
        }
        $photo->save();
        return to_route('admin.gallery.index')->withSuccess('Фото успешно добавлено!');
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
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit', compact('gallery'));
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
        $photo = Gallery::find($id);
        if($request->hasFile('img')) {
            $img_path = $request->file('img')->store('uploads', 'public');
            $photo->src = '/storage/'.$img_path;
        }
        $photo->save();
        return to_route('admin.gallery.index')->withSuccess('Фото успешно изменено!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Gallery::find($id);
        $photo->delete();
        return to_route('admin.gallery.index')->withSuccess('Фото удалено!');
    }
}
