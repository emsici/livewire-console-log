<?php

namespace ARCyberLab\ConsoleLog;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class ConsoleLogBladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('livewireConsoleLogs', function () {
            return "<?php echo view('console-log::console-log'); ?>";
        });

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'console-log');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
