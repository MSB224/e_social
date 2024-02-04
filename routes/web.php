<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AmisController;
use App\Http\Controllers\FichiersController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\ProfilsController;
use App\Http\Controllers\PublicationsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VideosController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
// call de route for show this content
Route::get('/',[AccueilController::class,'index'])->name('Accueil');//la route de l'accueil

// begin route for Video

Route::get('/Videos/index',[VideosController::class,'index'])->name('videos');//la route de la videos
Route::get('/Videos/ReadVideo',[VideosController::class,'ReadVideo'])->name('ReadVideo');//la route de la videos
// end route for video


Route::get('/Amis/index',[AmisController::class,'index'])->name('amis');//la route de la amis
Route::get('/Photos/index',[PhotosController::class,'index'])->name('photo');//la route de la photo
Route::get('/fichiers/index',[FichiersController::class,'index'])->name('fichier');//la route du fichier
Route::get('/Profils/index',[ProfilsController::class,'index'])->name('profile');//la route du profile

// end this calling 


// --------------------------------------------Route for user(CRUD)
Route::get('/Users/index',[UsersController::class,'index'])->name('UsersRoute');
Route::get('/Users/login',[UsersController::class,'login'])->name('UsersRouteLogin');
Route::post('/Users/store',[UsersController::class,'store'])->name('createNewUserStore');
Route::post('/Users/Authentification',[UsersController::class,'Authentification'])->name('connectUser');
// --------------------------------------------End Route for user(CRUD)

// publication route CRUD
Route::get('/Publication/index',[PublicationsController::class,'index'])->name('publication');//la route de la publication
Route::post('/Publication/store',[PublicationsController::class,'store'])->name('newPublication');//la route de la publication

