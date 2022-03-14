<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vacancy;

class AboutController extends Controller
{
    public function index(){
        $vacancies = Vacancy::get();
        return view('about', compact('vacancies'));
    }
}
