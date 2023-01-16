<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Partners;
use App\Http\Livewire\Links;
use App\Http\Livewire\Seminars;

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

Route::get('/', function () { return view('homepage._index'); })->name('homepage');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('partenaires', Partners::class)->name('partners');
    Route::get('liens-utiles', Links::class)->name('links');
    Route::get('actus-ateliers', Seminars::class)->name('seminars');
});
