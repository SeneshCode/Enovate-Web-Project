<?php

use App\Http\Controllers\enovateUsersController;
use App\Http\Controllers\mailSender;
use App\Mail\HelloMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('enovate');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::post('/store', [enovateUsersController::class, 'store'])->name('msg_store');
Route::get('/fetchall', [enovateUsersController::class, 'fetchAll'])->name('fetchAll');
Route::post('/contactstore', [mailSender::class, 'store'])->name('contact_store');
Route::get('/mailset', [mailSender::class, 'mailSet'])->name('mailSet');



// Route::get('/mail', function (){
//     Mail::to('seneshpawan84@gmail.com')->send(new HelloMail());
// });


