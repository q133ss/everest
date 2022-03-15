<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SectionCategory;

class IndexController extends Controller
{
    public function index()
    {
        $section_cats = SectionCategory::get();
        return view('index', compact('section_cats'));
    }
}
