# Laravel Console Log

Laravel package to log messages to the browser console with style!

## Installation

1. Add the package to your Laravel project:

    ```bash
    composer require emsici/console-log:dev-main
    ```

2. The service providers are auto-discovered. If you have disabled package discovery, add the providers to your `config/app.php` file:

    ```php
    'providers' => [
        // Other Service Providers
        emsici\ConsoleLog\ConsoleLogServiceProvider::class,
        emsici\ConsoleLog\ConsoleLogBladeServiceProvider::class,
    ],
    ```

## Usage

Log styled messages to the browser console from your Livewire components:

```php
use emsici\ConsoleLog\ConsoleLog;

ConsoleLog::log(
    ['Message 1', 'color: red; font-weight: bold;'],
    ['Message 2', 'color: blue;']
);
```

Include the Blade directive in your layout to load the required script:

```blade
@LivewireConsoleLog
```

This directive registers a listener that outputs the messages in the browser console with the provided styles.

