<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('home');
});

Route::get('/contacts', [ContactController::class, 'index']
)->name('index');


Route::get('/contacts/create', function(){
    return view('contacts/create');
})->name('create');


Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('show');