<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Post::paginate();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();

        if($request->title != NULL){
            $post->title = $request->title;
        }else{
            return redirect()->back()->withError('Введите название');
        }

        if($request->excerpt != NULL){
            $post->excerpt = $request->excerpt;
        }else{
            return redirect()->back()->withError('Введите краткое описание');
        }
        if($request->text != NULL) {
            $post->text = $request->text;
        }else{
            return redirect()->back()->withError('Введите текст');
        }
        if($request->hasFile('img')){
            $image = $request->file('img');
            $image_path = $image->store('uploads', 'public');
            $post->img = '/storage/'.$image_path;
        }else{
            return redirect()->back()->withError('Выберите изображение');
        }
        $post->save();
        return to_route('admin.news.index')->withSuccess('Новость создана!');
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
        $post = Post::find($id);
        return view('admin.news.edit', compact('post'));
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
        $post = Post::find($id);
        $post->title = $request->title;
        $post->excerpt = $request->excerpt;
        $post->text = $request->text;
        if($request->hasFile('img')){
            $image = $request->file('img');
            $image_path = $image->store('uploads', 'public');
            $post->img = '/storage/'.$image_path;
        }

        $post->save();
        return to_route('admin.news.index')->withSuccess('Новость изменена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return to_route('admin.news.index')->withError('Новость удалена!');
    }
}
