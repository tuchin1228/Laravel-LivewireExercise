<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Counter;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/root',App\Http\Livewire\Counter::class);
Route::get('/counter/{id?}',App\Http\Livewire\Counter::class)->name('counter');
Route::get('/child',App\Http\Livewire\Child::class)->name('child');