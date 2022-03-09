<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SectionCategory;

class SectionController extends Controller
{
    public function index($id){
        $sections = SectionCategory::find($id)->get_sections;
        return view('solo', compact('sections'));
    }
}
