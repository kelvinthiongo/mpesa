<?php

namespace TFS\Mpesa;

use Illuminate\Support\ServiceProvider;

class MpesaServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->mergeConfigFrom(__DIR__.'/config/mpesa.php', 'mpesa');
        $this->publishes([
            __DIR__.'/config/mpesa.php' => config_path('mpesa.php'),
        ]);
    }

    public function register(){

    }

}
