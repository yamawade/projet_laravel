<?php

use App\Models\Etudiant;
use App\Http\Controllers\EtudiantController;

use App\Models\Cours;
use App\Http\Controllers\CoursController;

use App\Models\Projet;
use App\Http\Controllers\ProjetController;

use App\Models\Listeprojet;
use App\Http\Controllers\ListeprojetController;

use App\Models\Phase;
use App\Http\Controllers\PhaseController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/listeprojet', function () {
//     return view('listeprojet');
// });

//Route::get('/liste', [EtudiantController::class, 'liste']);
Route::get('/cours', [CoursController::class, 'lister']);
Route::get('/liste', [EtudiantController::class, 'liste']);
Route::get('/projet', [ProjetController::class, 'projet'])->name("projet");
Route::post('/projet', [ProjetController::class, 'listeprojet']);
Route::get('/listeprojet', [ListeprojetController::class, 'index']);
Route::get('/detail/{id}', [ListeprojetController::class, 'detail_projet'])->name("detail");

Route::get('/phase', [PhaseController::class, 'phase'])->name("phase");
Route::post('/phase', [PhaseController::class, 'listephase']);