<?php

use App\Http\Controllers\Api\TweetController;
use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Routing url: [/api/xxx]

Route::get('tweet/get', [TweetController::class, 'get']);
Route::post('tweet/add', [TweetController::class, 'add']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

