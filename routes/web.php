<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('slots.symmetric_encryption');
});
