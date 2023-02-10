<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Partners;
use App\Http\Livewire\Links;
use App\Http\Livewire\Seminars;
use App\Http\Livewire\Announcements;

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
    Route::get('ateliers', Seminars::class)->name('seminars');
    Route::get('annonces', Announcements::class)->name('announcements');

    Route::get('accueil', function () { return view('admin.sections.home'); })->name('section.home');
    Route::get('nos-missions', function () { return view('admin.sections.missions'); })->name('section.missions');
    Route::get('nos-publics', function () { return view('admin.sections.publics'); })->name('section.publics');
    Route::get('resado', function () { return view('admin.sections.resado'); })->name('section.resado');
    Route::get('qui-sommes-nous', function () { return view('admin.sections.us'); })->name('section.us');
    Route::get('informations-pratiques', function () { return view('admin.sections.informations'); })->name('section.informations');
    Route::get('pied-de-page', function () { return view('admin.sections.footer'); })->name('section.footer');
});
