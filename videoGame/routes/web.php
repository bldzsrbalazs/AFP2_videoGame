<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GameController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;

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
Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/games/edit/{game}', [GameController::class, 'show'])->name('game.edit');
    Route::post('/games/{game}/seen', [GameController::class, 'gameisPlayed']) -> name("game.isplayed");
    Route::get('/games/played', [GameController::class, 'listPlayedGames']) -> name("game.listPlayedGames");
    Route::delete('/games/played/{play}', [GameController::class, 'deletePlayedGame']) -> name("game.deletePlayedGame");


    Route::get('/admin/games/create', [GameController::class, 'addGame'])->name('game.create');
    Route::post('/admin/games/create', [GameController::class, 'storeGame'])->name('game.create');
    Route::get('/admin/companies/create', [CompanyController::class, 'create'])->name('company.create');
    Route::post('/admin/companies', [CompanyController::class, 'store'])->name('companies.store');
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
    Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/admin/games/{game}/edit', [GameController::class, 'edit'])->name('game.edit');
    Route::patch('/admin/games/{game}', [GameController::class, 'update'])->name('game.update');



});

//Game
Route::get('/games', [GameController::class, 'index'])->name('game.all');
Route::get('/games/{game}', [GameController::class, 'show'])->name('game.details');





//Topic
Route::get('/topics/{topic}', [TopicController::class, 'show'])->name('game.topic');


//Company

Route::get('/companies', [CompanyController::class, 'index'])->name('company.all');
Route::get('/companies/{company}', [CompanyController::class, 'show'])->name('company.game');


require __DIR__.'/auth.php';
