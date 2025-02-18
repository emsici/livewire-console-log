<?php

namespace emsici\ConsoleLog;

use Illuminate\Support\ServiceProvider;

class ConsoleLogServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/console-log'),
        ], 'console-log-views');
    }
}
