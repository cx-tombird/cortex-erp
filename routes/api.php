<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/health', function () {
    return response()->json([
        'status' => 'OK',
        'timestamp' => now()->toIso8601String(),
    ]);
});

Route::prefix('v1')->group(base_path('routes/api-v1.php'));
