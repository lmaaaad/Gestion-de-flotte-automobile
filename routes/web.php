<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\affectation\AffectationController;
use App\Http\Controllers\entretiens\EntretienController;
use App\Http\Controllers\fournisseur\fournisseurController;
use App\Http\Controllers\gestionv\ConducteurController;
use App\Http\Controllers\gestionv\VehiculeController;
use App\Http\Controllers\gestionv\AssuranceController;
use App\Http\Controllers\gestionv\TaxeController;
use App\Http\Controllers\gestionv\VisiteController;
use App\Http\Controllers\piece\pieceController;
use App\Http\Controllers\SearchController;

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
    return view('auth/login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin routes
Route::prefix('admin')->middleware(['auth','auth.isAdmin'])->name('admin.')->group(function(){ 
Route::resource('/users',UserController::class); });

Route::prefix('pieces')->middleware(['auth','auth.isAdmin'])->name('pieces.')->group(function(){ 
    Route::resource('/fournisseurs',FournisseurController::class); 
});

Route::prefix('pieces')->middleware(['auth','auth.isAdmin'])->name('pieces.')->group(function(){ 
    Route::resource('/pieces',pieceController::class); 
});
Route::prefix('gestionv')->middleware(['auth','auth.isAdmin'])->name('gestionv.')->group(function(){ 
    Route::resource('/conducteurs',ConducteurController::class); 
});
Route::prefix('gestionv')->middleware(['auth','auth.isAdmin'])->name('gestionv.')->group(function(){ 
    Route::resource('/vehicules',VehiculeController::class); 
});

Route::prefix('gestionv')->middleware(['auth','auth.isAdmin'])->name('gestionv.')->group(function(){ 
    Route::resource('/assurances',AssuranceController::class); 
});
Route::prefix('gestionv')->middleware(['auth','auth.isAdmin'])->name('gestionv.')->group(function(){ 
    Route::resource('/taxes',TaxeController::class); 
});
Route::prefix('gestionv')->middleware(['auth','auth.isAdmin'])->name('gestionv.')->group(function(){ 
    Route::resource('/visites',VisiteController::class); 
});
Route::prefix('entretiens')->middleware(['auth','auth.isAdmin',])->name('entretiens.')->group(function(){ 
    Route::resource('/entretiens',EntretienController::class); 
});

Route::prefix('affectations')->middleware('auth')->name('affectations.')->group(function(){ 
    Route::resource('/affectations',AffectationController::class); 
});
Route::get('/rapport', [App\Http\Controllers\RapportController::class, 'index'])->middleware(['auth','auth.isAdmin'])->name('rapport');

Route::get('/autocomplete',[SearchController::class,'autocomplete'])->name('autocomplete');



Route::get('/piece_utiliser', [App\Http\Controllers\PiecesuController::class, 'index'])->middleware(['auth','auth.isAdmin'])->name('piece');


