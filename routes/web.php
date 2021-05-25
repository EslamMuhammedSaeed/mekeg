<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
// use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\MainPageController::class,'index']);
;
Route::get('/test', function(){
    return view('foundation.test');
});
Route::post('/uploadfile', [App\Http\Controllers\FoundationController::class,'test']);

Route::get('/create_foundation', [App\Http\Controllers\FoundationController::class,'create']);

Route::post('/create_foundation',[App\Http\Controllers\FoundationController::class,'store']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','checkadmin','verified'])->name('dashboard');

Route::get('/email/verify',function(){
    return view();
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

use Illuminate\Http\Request;

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

require __DIR__.'/auth.php';

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
