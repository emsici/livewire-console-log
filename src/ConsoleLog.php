<?php

namespace emsici\ConsoleLog;

use Livewire\Component;

class ConsoleLog extends Component
{
    public static function log(array ...$messages): void
    {
        $instance = app(static::class);
        $instance->dispatch('LivewireConsoleLog', ['messages' => $messages]);
    }
}
