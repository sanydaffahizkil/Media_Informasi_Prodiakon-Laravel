<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->trustProxies(at: '*');
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*') || $request->expectsJson(),
        );
    })->create();

// Ensure writable storage on serverless platforms (Vercel / Lambda)
if (isset($_SERVER['VERCEL']) || isset($_ENV['VERCEL']) || env('VERCEL') || !empty($_ENV['LAMBDA_TASK_ROOT'])) {
    $tmpStorage = sys_get_temp_dir() . '/storage';
    if (!is_dir($tmpStorage . '/framework/views')) {
        @mkdir($tmpStorage . '/framework/views', 0777, true);
    }
    if (!is_dir($tmpStorage . '/framework/cache/data')) {
        @mkdir($tmpStorage . '/framework/cache/data', 0777, true);
    }
    if (!is_dir($tmpStorage . '/framework/sessions')) {
        @mkdir($tmpStorage . '/framework/sessions', 0777, true);
    }
    if (!is_dir($tmpStorage . '/logs')) {
        @mkdir($tmpStorage . '/logs', 0777, true);
    }
    $app->useStoragePath($tmpStorage);
}

return $app;
