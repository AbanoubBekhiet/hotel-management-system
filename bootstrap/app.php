<?php

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\FrontDeskMiddleware;
use App\Http\Middleware\HousekeeperMiddleware;
use App\Http\Middleware\WorkmanMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => AdminMiddleware::class,
            'front_desk' => FrontDeskMiddleware::class,
            'housekeeper' => HousekeeperMiddleware::class,
            'workman' => WorkmanMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
