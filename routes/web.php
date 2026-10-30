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

Route::get('/it-risinājumi', function () {
    return view('it-risinajumi');
});

Route::get('/it-risinajumi', function () {
    return view('it-risinajumi');
});

Route::get('/jaunumi', function () {
    return view('jaunumi');
});

Route::get('/kontakti', function () {
    return view('kontakti');
});

Route::get('/musu-klienti', function () {
    return view('musu-klienti');
});

Route::get('/veikalu-aprikojums', function () {
    return view('veikalu-aprikojums');
});

Route::get('/par-mums', function () {
    return view('par-mums');
});

