<?php

use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Redirect to login page
Route::get('/', function () {
    return redirect(route('login'));
});

// Register authentication routes
Auth::routes([
    'verify' => true
    // 'register' => false
]);


Route::get('/home', [RecordController::class, 'index'])->name('home')->middleware(['auth', 'verified']);

Route::group(['prefix' => 'records', 'middleware' => ['auth', 'verified'], 'as' => 'record.'], function () {
    Route::get('/create', [RecordController::class, 'create'])->name('create');
    Route::post('/create', [RecordController::class, 'store']);

    Route::get('/show/{id}', [RecordController::class, 'show'])->name('show');
});
