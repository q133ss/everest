<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SectionCategory;

class SectionController extends Controller
{
    public function index($id){
        $category_name = SectionCategory::find($id)['name'];
        $sections = SectionCategory::find($id)->get_sections;
        return view('solo', compact('sections', 'category_name'));
    }
}
