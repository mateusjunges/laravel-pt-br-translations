<?php

namespace Junges\PtBrValidationMessages\Providers;

use Illuminate\Support\ServiceProvider;

class PtBrValidationMessagesServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->publishes([
            __DIR__."/../../resources/lang/pt-br" => resource_path('lang/pt-br')
        ], 'pt-br-translations');
    }
}