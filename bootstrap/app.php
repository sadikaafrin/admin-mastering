<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
//        then: function () {
//            Route::prefix('admin')
//                ->name('backend.')
//                ->group(base_path('routes/backend.php'));
//        }

    )


    ->withMiddleware(function (Middleware $middleware) {
//    $middleware->alias([
//        'admin' => \App\Http\Middleware\CheckRole::class,
//    ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
