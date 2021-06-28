<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('pages.app_home');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//Route::get('/etudiant',[EtudiantController::class,"index"])->name('app_etudiant');

Route::middleware(['auth:sanctum', 'verified'])->get('/etudiant',[EtudiantController::class,"index"])->name('app_etudiant');
Route::middleware(['auth:sanctum', 'verified'])->get('/etudiant/create',[EtudiantController::class,"create"])->name('app_add_etudiant');
Route::middleware(['auth:sanctum', 'verified'])->post('/etudiant/create',[EtudiantController::class,"store"])->name('app_ajouter_etudiant');