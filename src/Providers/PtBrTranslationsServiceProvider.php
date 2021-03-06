<?php

namespace Junges\PtBrTranslations\Providers;

use Illuminate\Support\ServiceProvider;

class PtBrTranslationsServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->publishes([
            __DIR__."/../../resources/lang/pt-br" => resource_path('lang/pt-br')
        ], 'laravel-pt-br-translations');
    }
}