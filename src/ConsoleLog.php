<?php

namespace ARCyberLab\ConsoleLog;

use Livewire\Component;

class ConsoleLog extends Component
{
    public static function log(array ...$messages)
    {
        // Instanțierea unui obiect al clasei
        $instance = app(static::class);

        foreach ($messages as $message) {
            $msg = $message[0];
            $css = isset($message[1]) ? $message[1] : '';
            $instance->dispatch('consoleLog', [['application' => 'MyApp', 'version' => '1.0', 'module' => $msg, 'style' => $css]]);
        }
    }
}
