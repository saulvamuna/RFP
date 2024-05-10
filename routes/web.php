<?php

use App\Http\Livewire\Petition\CreatePetition;
use App\Http\Livewire\Petition\HomePetition;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\DB;

// DB::listen(function ($query){
//     echo "<pre style='font-size: 10px'>{$query->sql}</pre>";
//     echo "<pre>{$query->time}</pre>";
// });


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

//Rutas Usuarios sin autenticación
Route::get('/', function () {
    return view('home');
});
Route::get('/dashboard', function () { return view('dashboard'); });
Route::get('/home-petition', HomePetition::class)->name('home-petition');
Route::get('/create-petition', CreatePetition::class)->name('create-petition');

//Rutas para usuarios autenticados
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
