# laravel-notify

A simple package for flashing messages to views in Laravel 5+.

## Installation

First, require the package using composer like so:

`composer require xutl/laravel-notify`

Add the service provider and alias in the app.php file in Laravel.

```php
'providers' => [
    ...
    XuTL\Notify\FlashNotifyServerProvider::class,
],

...

'aliases' => [
  	...
  	'Notify' => XuTL\Notify\Notify::class,
],

```

## Usage
To use Notify, simple add use Notify at the top of your php file and then call it using the Notify facade.

```php
Notify::info('This is an info message');
Notify::success('This is a success message');
Notify::warning('This is a warning message');
Notify::error('This is an error message');
```

You can also add a title to the message if you would like:

```php
Notify::error($message, $title); // By default, the $title variable is set to null.
Notify::error('Something is broken', 'ERROR MESSAGE');
```