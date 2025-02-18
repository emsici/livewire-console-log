<?php

namespace ARCyberLab\ConsoleLog;

use Livewire\Component;

class ConsoleLog extends Component
{
    public static function log(array ...$messages)
    {
        foreach ($messages as $message) {
            $msg = $message[0];
            $css = isset($message[1]) ? $message[1] : '';
            self::dispatchBrowserEvent('consoleLog', [['application' => 'MyApp', 'version' => '1.0', 'module' => $msg, 'style' => $css]]);
        }
    }
}
