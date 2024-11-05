<?php
use App\Http\Controllers\EprController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MatiereController;

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

// Route pour afficher la liste des matières
//Route::get('/matieres', [MatController::class, 'index'])->name('matieres.index');

// Route pour afficher le formulaire de création de matière
//Route::get('/matieres/create', [MatController::class, 'create'])->name('matiere.create');

// Route pour gérer l'ajout d'une matière
//Route::post('/matiere', [MatController::class, 'store'])->name('matieres.store');

// Routes pour les épreuves
Route::get('/epreuve', [EprController::class, 'index'])->name('epreuve.index');
Route::get('/epreuve/create', [EprController::class, 'create'])->name('epreuve.create');
Route::post('/epreuve', [EprController::class, 'store'])->name('epreuve.store');

// Route de la page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Route pour afficher une page de test (TP1)
Route::get('/tp1', function () {
    return view('affMat');
});
Route::resource('matier',MatiereController::class);
Route::resource('matieres', MatiereController::class);
