<?php

namespace ARCyberLab\ConsoleLog;

use Livewire\Component;

class ConsoleLog extends Component
{
    public static function send(array ...$messages)
    {
        // Instanțierea unui obiect al clasei
        $instance = app(static::class);

        foreach ($messages as $message) {
            $instance->dispatch('consoleLogLivewire', [$message]);
        }
    }
}
