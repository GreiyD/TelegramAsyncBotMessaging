<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    \Illuminate\Support\Facades\Http::post('https://api.telegram.org/bot6407639870:AAH7mvX-QhwHFO0l7rmabv14fVHrpniIl2Q/sendMessage',[
        'chat_id' => 827700675,
        'text' => 'Привет'
    ]);
});

