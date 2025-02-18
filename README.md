# Laravel Console Log

Laravel package to log messages to the browser console with style!

## Installation

1. Add the package to your Laravel project:

    ```bash
    composer require emsici/console-log:dev-main
    ```

2. Add the service provider to your `config/app.php` file:

    ```php
    'providers' => [
        // Other Service Providers

        ARCyberLab\ConsoleLog\ConsoleLogServiceProvider::class,
    ],
    ```


## Usage

To log messages to the browser console with style, use the `ConsoleLog::log` method in your Livewire components:

```php
use ARCyberLab\ConsoleLog\ConsoleLog;

ConsoleLog::log(
    ['Message 1', 'color: red; font-weight: bold;'], 
    ['Message 2', 'color: blue;']
);
