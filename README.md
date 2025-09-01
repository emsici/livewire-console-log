# Laravel Console Log

Laravel package to log messages to the browser console with style!

## Installation

1. Add the package to your Laravel project:

    ```bash
    composer require emsici/console-log
    ```

2. The service providers are auto-discovered. If you have disabled package discovery, add the providers to your `config/app.php` file:

    ```php
    'providers' => [
        // Other Service Providers
        Emsici\ConsoleLog\ConsoleLogServiceProvider::class,
        Emsici\ConsoleLog\ConsoleLogBladeServiceProvider::class,
    ],
    ```

## Usage

Log messages to the browser console from anywhere in your application. Messages can be plain strings or include style information:

```php
use Emsici\ConsoleLog\ConsoleLog;

ConsoleLog::log(
    'Saved successfully',
    ['Warning', 'color: red; font-weight: bold;']
);

// Optional: scope dispatch to a specific Livewire component instance
ConsoleLog::log($this, 'Scoped to this component');
```

Include the Blade directive in your layout to load the required script:

```blade
@consoleLog {{-- or @LivewireConsoleLog for backwards compatibility --}}
```

This directive registers a listener that outputs the messages in the browser console with optional styles.

