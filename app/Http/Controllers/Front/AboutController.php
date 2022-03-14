<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\Gallery;

class AboutController extends Controller
{
    public function index(){
        $vacancies = Vacancy::get();
        $gallery = Gallery::get();
        return view('about', compact('vacancies', 'gallery'));
    }
}
