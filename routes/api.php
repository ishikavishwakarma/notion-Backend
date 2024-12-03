<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController\MailController;
// use App\Http\Controllers\Mandate\MandateMailController;




Route::post('contact/mail', [MailController::class, 'contactMail']);


use App\Http\Controllers\MandateController;

Route::post('/mandates', [MandateController::class, 'store']);
Route::get('/mandates/getalldata', [MandateController::class, 'get']);
Route::delete('/mandates/{id}', [MandateController::class, 'destroy']);


// Route::post('/mandates/mail', [MandateMailController::class, 'mail']);

// Route::get('mandates/send/{id}', [MandateController::class, 'sendMail']);

Route::get('mandates/send/{id}', [MandateController::class, 'sendEmailWithPdf']);

// Route::get('/mandates/send-email/{id}', [MandateController::class, 'sendEmailWithPdf']);