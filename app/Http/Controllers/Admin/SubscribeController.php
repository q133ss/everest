<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscribe;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribes = Subscribe::get();
        return view('admin.subscribe.index', compact('subscribes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subscribe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subscribe = new Subscribe();
        $subscribe->title = $request->title;
        $price = array_combine($request->price_title, $request->price_price);
        $subscribe->price = json_encode($price);
        $subscribe->description = $request->description;
        $subscribe->save();
        return to_route('admin.subscribe.index')->withSuccess('Абонимент успешно добавлен!');
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
        $subscribe = Subscribe::find($id);
        return view('admin.subscribe.edit', compact('subscribe'));
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
        $subscribe = Subscribe::find($id);
        $subscribe->title = $request->title;
        $price = array_combine($request->price_title, $request->price_price);
        $subscribe->price = json_encode($price);
        $subscribe->description = $request->description;
        $subscribe->save();
        return to_route('admin.subscribe.index')->withSuccess('Абонимент успешно обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subscribe = Subscribe::find($id);
        $subscribe->delete();
        return redirect()->back()->withSuccess('Абонимент удален!');
    }
}
