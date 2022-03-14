<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\SectionCategory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $section_categories = SectionCategory::get();
        View::share('section_categories',$section_categories);

        if(Setting::where('key', 'header_phone')->first() != NULL) {
            $header_phone = Setting::where('key', 'header_phone')->first()['value'];
        }else{
            $header_phone = '+7 921 33 33 840';
        }

        View::share('header_phone',$header_phone);

        if(Setting::where('key', 'phone2')->first() != NULL) {
            $phone2 = Setting::where('key', 'phone2')->first()['value'];
        }else{
            $phone2 = '+7 931 33 33 890';
        }

        View::share('phone2',$phone2);

        if(Setting::where('key', 'footer_adr')->first() != NULL) {
            $footer_adr = Setting::where('key', 'footer_adr')->first()['value'];
        }else{
            $footer_adr = 'Пр. Ветеранов, д. 169, к. 4 ТК «Солнечный» 3 этаж';
        }

        View::share('footer_adr',$footer_adr);

        if(Setting::where('key', 'inst')->first() != NULL) {
            $inst = Setting::where('key', 'inst')->first()['value'];
        }else{
            $inst = '#';
        }

        View::share('inst',$inst);

        if(Setting::where('key', 'vk')->first() != NULL) {
            $vk = Setting::where('key', 'vk')->first()['value'];
        }else{
            $vk = '#';
        }

        View::share('vk',$vk);
    }
}
