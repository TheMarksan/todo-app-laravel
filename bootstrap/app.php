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
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        // $middleware->validateCsrfTokens(except: [
        //     '/signIn'
        // ]);

        // $middleware->redirectTo(
        //     guests: '/signIn',
        //     users: '/dashboard'
        // );

        // $middleware->append([
        //     \App\Http\Middleware\EnsureTokenIsValid::class
        // ]);

        // $middleware->group('web', [
        //     \App\Http\Middleware\EnsureTokenIsValid::class
        // ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
