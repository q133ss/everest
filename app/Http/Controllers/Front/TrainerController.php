<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trainer;

class TrainerController extends Controller
{
    public function index(){
        $trainers = Trainer::get();
        return view('trainers', compact('trainers'));
    }
}
