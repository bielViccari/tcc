<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', [SiteController::class, 'index'])->name('site.home');

Route::get('/cadastrar', [SiteController::class, 'cadastroUsuario'])->name('site.usuarios.create');
Route::post('/cadastrar', [RegisteredUserController::class, 'store'])->name('site.usuarios.store');

Route::group(['middleware' =>'guest'],function () {
    

Route::get('/login', [SiteController::class, 'login'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('entrar');


});
Route::get('/quem_somos', [SiteController::class,'quemSomos'])->name('site.quem_somos.home');


?>