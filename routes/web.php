<?php

use App\Http\Controllers\RequestrationController;
use App\Http\Controllers\ProfileController;
use App\Models\Requestration;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::middleware('auth')->group(function (){
    Route::get('/dashboard',[RequestrationController::class ,'index'])->name('dashboard.index');
    Route::resource('/dashboard',RequestrationController::class);
});


Route::middleware('auth')->group(function () {
    Route::post('/profile',[ProfileController::class,'store']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





// Email verify by messages routes -  After getting a domain uncomment those
//Route::get('/email/verify', function () {
//    return view('/');
//})->middleware('auth')->name('verification.notice');
//Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//    $request->fulfill();
//    return redirect('/dashboard');
//})->middleware(['auth', 'signed'])->name('verification.verify');
//Route::post('/email/verification-notification', function (Request $request) {
//    $request->user()->sendEmailVerificationNotification();
//    return back()->with('message', 'Verification link sent!');
//})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
//

require __DIR__.'/auth.php';




