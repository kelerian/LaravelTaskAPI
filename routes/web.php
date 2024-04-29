<?php

require __DIR__ . '/api.php';

use App\Http\Controllers\PushController;
use Illuminate\Support\Facades\Route;

Route::get('/push', [PushController::class, 'db_push']);

