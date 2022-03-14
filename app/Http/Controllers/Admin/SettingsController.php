<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function index(){
        if(Setting::where('key', 'email')->first() != NULL) {
            $email = Setting::where('key', 'email')->first()['value'];
        }else{
            $email = '';
        }


        if(Setting::where('key', 'header_phone')->first() != NULL) {
            $header_phone = Setting::where('key', 'header_phone')->first()['value'];
        }else{
            $header_phone = '';
        }


        if(Setting::where('key', 'phone2')->first() != NULL) {
            $phone2 = Setting::where('key', 'phone2')->first()['value'];
        }else{
            $phone2 = '';
        }

        if(Setting::where('key', 'inst')->first() != NULL) {
            $inst = Setting::where('key', 'inst')->first()['value'];
        }else{
            $inst = '';
        }

        if(Setting::where('key', 'vk')->first() != NULL) {
            $vk = Setting::where('key', 'vk')->first()['value'];
        }else{
            $vk = '';
        }


        if(Setting::where('key', 'footer_adr')->first() != NULL) {
            $footer_adr = Setting::where('key', 'footer_adr')->first()['value'];
        }else{
            $footer_adr = '';
        }


        if(Setting::where('key', 'cont_email')->first() != NULL) {
            $cont_email = Setting::where('key', 'cont_email')->first()['value'];
        }else{
            $cont_email = '';
        }


        if(Setting::where('key', 'cont_adr')->first() != NULL) {
            $cont_adr = Setting::where('key', 'cont_adr')->first()['value'];
        }else{
            $cont_adr = '';
        }


        if(Setting::where('key', 'cont_gr')->first() != NULL) {
            $cont_gr = Setting::where('key', 'cont_gr')->first()['value'];
        }else{
            $cont_gr = '';
        }

        return view('admin.settings', compact('email', 'header_phone', 'phone2','inst', 'vk', 'footer_adr', 'cont_email', 'cont_adr', 'cont_gr'));
    }

    public function save(Request $request){
        if($request->email != NULL){
            $email_find = Setting::where('key', 'email')->first();
            if($email_find == NULL){
                $email = new Setting();
                $email->key = 'email';
                $email->value = $request->email;
                $email->save();
            }else{
                $email_find->value = $request->email;
                $email_find->save();
            }
        }else{
            return redirect()->back()->withError('Введите Email');
        }

        //header phone
        if($request->header_phone != NULL){
            $header_phone_find = Setting::where('key', 'header_phone')->first();
            if($header_phone_find == NULL){
                $header_phone = new Setting();
                $header_phone->key = 'header_phone';
                $header_phone->value = $request->header_phone;
                $header_phone->save();
            }else{
                $header_phone_find->value = $request->header_phone;
                $header_phone_find->save();
            }
        }else{
            return redirect()->back()->withError('Введите телефон 1');
        }


        //phone 2
        if($request->phone2 != NULL){
            $header_phone_find = Setting::where('key', 'phone2')->first();
            if($header_phone_find == NULL){
                $header_phone = new Setting();
                $header_phone->key = 'phone2';
                $header_phone->value = $request->phone2;
                $header_phone->save();
            }else{
                $header_phone_find->value = $request->phone2;
                $header_phone_find->save();
            }
        }else{
            return redirect()->back()->withError('Введите телефон 2');
        }


        //foter adress
        if($request->footer_adr != NULL){
            $header_phone_find = Setting::where('key', 'footer_adr')->first();
            if($header_phone_find == NULL){
                $header_phone = new Setting();
                $header_phone->key = 'footer_adr';
                $header_phone->value = $request->footer_adr;
                $header_phone->save();
            }else{
                $header_phone_find->value = $request->footer_adr;
                $header_phone_find->save();
            }
        }else{
            return redirect()->back()->withError('Введите адрес для футера');
        }


        //contact adress
        if($request->cont_email != NULL){
            $header_phone_find = Setting::where('key', 'cont_email')->first();
            if($header_phone_find == NULL){
                $header_phone = new Setting();
                $header_phone->key = 'cont_email';
                $header_phone->value = $request->cont_email;
                $header_phone->save();
            }else{
                $header_phone_find->value = $request->cont_email;
                $header_phone_find->save();
            }
        }else{
            return redirect()->back()->withError('Введите адрес для страницы контактов');
        }

        //contact adress
        if($request->cont_adr != NULL){
            $header_phone_find = Setting::where('key', 'cont_adr')->first();
            if($header_phone_find == NULL){
                $header_phone = new Setting();
                $header_phone->key = 'cont_adr';
                $header_phone->value = $request->cont_adr;
                $header_phone->save();
            }else{
                $header_phone_find->value = $request->cont_adr;
                $header_phone_find->save();
            }
        }else{
            return redirect()->back()->withError('Введите адрес для страницы контактов');
        }


        //cont work time
        if($request->cont_gr != NULL){
            $header_phone_find = Setting::where('key', 'cont_gr')->first();
            if($header_phone_find == NULL){
                $header_phone = new Setting();
                $header_phone->key = 'cont_gr';
                $header_phone->value = $request->cont_gr;
                $header_phone->save();
            }else{
                $header_phone_find->value = $request->cont_gr;
                $header_phone_find->save();
            }
        }else{
            return redirect()->back()->withError('Введите график работы');
        }

        //inst
        if($request->inst != NULL){
            $header_phone_find = Setting::where('key', 'inst')->first();
            if($header_phone_find == NULL){
                $header_phone = new Setting();
                $header_phone->key = 'inst';
                $header_phone->value = $request->inst;
                $header_phone->save();
            }else{
                $header_phone_find->value = $request->inst;
                $header_phone_find->save();
            }
        }else{
            return redirect()->back()->withError('Введите график instagram');
        }


        if($request->vk != NULL){
            $header_phone_find = Setting::where('key', 'vk')->first();
            if($header_phone_find == NULL){
                $header_phone = new Setting();
                $header_phone->key = 'vk';
                $header_phone->value = $request->vk;
                $header_phone->save();
            }else{
                $header_phone_find->value = $request->vk;
                $header_phone_find->save();
            }
        }else{
            return redirect()->back()->withError('Введите VK');
        }


        return to_route('admin.settings.index')->withSuccess('Настройки сохранены');
    }
}
