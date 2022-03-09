<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function index(){
        $email = Setting::where('key', 'email')->first()['value'];
        return view('admin.settings', compact('email'));
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
            return to_route('admin.settings.index')->withSucces('Email изменен');
        }
    }
}
