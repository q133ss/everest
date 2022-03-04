<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class NewsController extends Controller
{
    public function index(){
        $posts = Post::paginate(12);
        return view('news.index', compact('posts'));
    }
}
