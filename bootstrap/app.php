<?php

use App\Http\Middleware\juri;
use App\Http\Middleware\tamu;
use App\Http\Middleware\user;
use App\Http\Middleware\admin;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'guest' => tamu::class,
            'user' => user::class,
            'admin' => admin::class,
            'juri' => juri::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
