<?php

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

// Bind the HTTP kernel
$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

// Bind the console kernel
$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

// Bind the exception handler
$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

// Set the public path
$app->bind('path.public', function () {
    return __DIR__.'/../public';
});

// Set the base path
$app->bind('path.base', function () {
    return dirname(__DIR__);
});

// Set the config path
$app->bind('path.config', function () {
    return dirname(__DIR__) . '/config';
});

// Set the storage path
$app->bind('path.storage', function () {
    return dirname(__DIR__) . '/storage';
});

// Set the resources path
$app->bind('path.resources', function () {
    return dirname(__DIR__) . '/resources';
});

return $app;
