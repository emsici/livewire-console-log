<?php

namespace ARCyberLab\ConsoleLog;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class ConsoleLogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Livewire::listen('consoleLog', function ($event) {
            $this->consoleLog($event);
        });
    }

    protected function consoleLog($messages)
    {
        foreach ($messages as $message) {
            $msg = $message[0]['module'];
            $css = $message[0]['style'];
            echo "<script>console.log('%c{$msg}', '{$css}');</script>";
        }
    }
}
