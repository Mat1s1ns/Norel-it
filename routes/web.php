<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/datortehnikas-tirdzniecība', function () {
    return view('datortehnika');
});

Route::get('/datortehnikas-tirdznieciba', function () {
    return view('datortehnika');
});

Route::get('/it-audits', function () {
    return view('it-audits');
});
