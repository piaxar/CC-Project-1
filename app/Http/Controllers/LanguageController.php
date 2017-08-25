<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;

class LanguageController extends Controller
{
    public function changeLanguage()
    {
        if (App::isLocale('en')) {
            App::setLocale('ru');
            $locale = 'ru';
            Cache::put('locale', $locale, 3600);
        } else {
            App::setLocale('en');
            $locale = 'en';
            Cache::put('locale', $locale, 3600);
        }
        return back()->withCookie(cookie('locale', $locale, 360));
    }

}
