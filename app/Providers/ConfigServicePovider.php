<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ConfigServiceProvider extends ServiceProvider {

    public function register() {
        config([
            'laravellocalization.supportedLocales' => [
                'ar' => array('name' => 'Arabic', 'script' => 'Arab', 'native' => 'العربية'),
                'en' => array('name' => 'English', 'script' => 'Latn', 'native' => 'English'),
                'ur' => array('name' => 'Urdu', 'script' => 'Arab', 'native' => 'اردو'),
            ],
            'laravellocalization.useAcceptLanguageHeader' => true,
            'laravellocalization.hideDefaultLocaleInURL' => true
        ]);
    }

}
