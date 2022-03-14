<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

        if(Setting::where('key', 'header_phone')->first() != NULL) {
            $header_phone = Setting::where('key', 'header_phone')->first()['value'];
        }else{
            $header_phone = '+7 921 33 33 840';
        }


        if(Setting::where('key', 'phone2')->first() != NULL) {
            $phone2 = Setting::where('key', 'phone2')->first()['value'];
        }else{
            $phone2 = '+7 931 33 33 890';
        }

        if(Setting::where('key', 'cont_email')->first() != NULL) {
            $cont_email = Setting::where('key', 'cont_email')->first()['value'];
        }else{
            $cont_email = 'everest-sg@yandex.ru';
        }


        if(Setting::where('key', 'cont_adr')->first() != NULL) {
            $cont_adr = Setting::where('key', 'cont_adr')->first()['value'];
        }else{
            $cont_adr = 'Пр. Ветеранов, д. 169, к. 4<br>ТК «Солнечный» 3 этаж';
        }


        if(Setting::where('key', 'cont_gr')->first() != NULL) {
            $cont_gr = Setting::where('key', 'cont_gr')->first()['value'];
        }else{
            $cont_gr = 'Пн-Пт: 7:00 - 23:00<br>Сб-Вс: 8:00 - 22.30';
        }
        return view('contact', compact('header_phone', 'phone2', 'cont_email', 'cont_adr', 'cont_gr'));
    }
}
