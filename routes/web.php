<?php

use App\Http\Controllers\ResponseSoapController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('get-voucher-authorization', [ResponseSoapController::class, 'responseSoap']);
