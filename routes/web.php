<?php

use App\Events\TestReverbEvent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// websocket (Laravel Reverb) のテストのためのエンドポイント
Route::get('/websocket-test/page', function () {
    return view('websocket');
});

Route::get('/websocket-test/dispatch-event', function () {
    TestReverbEvent::dispatch();

    return response(null, 200);
});
