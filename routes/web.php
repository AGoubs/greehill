<?php

use App\Http\Livewire\AddLanguage;
use App\Http\Livewire\AddQuestion;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\DeleteLanguage;
use App\Http\Livewire\EditQuestion;
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

Route::get('/', function () {
  return redirect()->route('login');
});

Route::middleware([
  'auth:sanctum',
  config('jetstream.auth_session'),
  'verified'
])->group(function () {
  Route::get('/dashboard/{questionId?}', Dashboard::class)->name('dashboard');

  Route::get('/add-question', AddQuestion::class)->name('question.add');
  Route::get('/edit-question/{questionId}', EditQuestion::class)->name('question.edit');

  Route::get('/add-language', AddLanguage::class)->name('language.add');
  Route::get('/delete-language', DeleteLanguage::class)->name('language.delete');
});
