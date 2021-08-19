<?php

use App\Models\Ecole;
use App\Models\Universite;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('contact',[App\Http\Controllers\ContactController::class, 'create'])->name('contact.create');
Route::post('contact',[App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

Route::get('Academies',function(){

    $universites= Universite::take(5)->latest()->get();
    $ecoles= Ecole::take(5)->latest()->get();

    return view('Academies',compact('universites','ecoles'));
})->name('Academies');




Route::group(['middleware' => ['auth']], function () {
   
    Route::view('/admin','admin.index')->name('admin');

    Route::name('admin.')->group(function(){
        Route::view('admin/users','admin.users')->name('users');
        Route::view('admin/universites','admin.universites')->name('universites');
        Route::view('admin/facultes','admin.facultes')->name('facultes');
        Route::view('admin/filieres-Ecoles','admin.filieres-Ecoles')->name('filieres-Ecoles');
        Route::view('admin/filieres-Universites','admin.filieres-Universites')->name('filieres-Universites');
        Route::view('admin/niveaux','admin.niveaux')->name('niveaux');
        Route::view('admin/matieres','admin.matieres')->name('matieres');
       
        Route::view('admin/ecoles','admin.ecoles')->name('ecoles');
        Route::view('admin/cours','admin.cours')->name('cours');
        Route::view('admin/bibliotheque','admin.bibliotheque')->name('bibliotheque');
    });
});


Route::get('Academies/universites',[App\Http\Controllers\UniversiteController::class, 'index'])->name('universites.index');
Route::get('Academies/ecoles',[App\Http\Controllers\EcoleController::class, 'index'])->name('Ecoles.index');
Route::get('Academies/universites/{universite}',[App\Http\Controllers\UniversiteController::class, 'show'])->name('universites.show');
Route::get('Academies/ecoles/{ecole}',[App\Http\Controllers\EcoleController::class, 'show'])->name('Ecoles.show');

