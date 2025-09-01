<?php

namespace Emsici\ConsoleLog;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class ConsoleLogBladeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('consoleLog', function () {
            return "<?php echo view('console-log::console-log'); ?>";
        });

        // Backwards compatibility for the old directive name
        Blade::directive('LivewireConsoleLog', function () {
            return "<?php echo view('console-log::console-log'); ?>";
        });

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'console-log');
    }

    public function register()
    {
        //
    }
}
