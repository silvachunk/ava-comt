<?php

declare(strict_types=1);

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

// Basic homepage or health check route
Route::get('/', function () {
    return 'Fanuda Ava is live!';
});

// Automatically load all v1 API routes
foreach (File::allFiles(__DIR__ . '/v1') as $partial) {
    Route::prefix('/v1')->group($partial->getPathname());
}
