<?php

namespace Emsici\ConsoleLog;

use Livewire\Component;
use Livewire\Livewire;

class ConsoleLog
{
    /**
     * Dispatch messages to the browser console.
     *
     * Messages may be plain strings or an array of [message, style].
     * Pass a Livewire component instance as the first argument to dispatch
     * within that component's context; otherwise a global dispatch will be
     * triggered allowing usage outside of components.
     */
    public static function log(...$arguments): void
    {
        $component = null;

        if ($arguments && $arguments[0] instanceof Component) {
            $component = array_shift($arguments);
        }

        $payload = ['messages' => $arguments];

        if ($component) {
            $component->dispatch('LivewireConsoleLog', $payload);
        } else {
            Livewire::dispatch('LivewireConsoleLog', $payload);
        }
    }
}
