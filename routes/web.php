<?php

use Illuminate\Support\Facades\Route;
use HarayaTalk\Http\Controllers\MessageController;
use HarayaTalk\Http\Controllers\ConversationController;

Route::middleware('auth:sanctum')->group(function () {
    Route::post('messages', [MessageController::class, 'store']);
    Route::get('messages/{conversation}', [MessageController::class, 'index']);
    Route::post('conversations', [ConversationController::class, 'store']);
    Route::get('conversations', [ConversationController::class, 'index']);
});
