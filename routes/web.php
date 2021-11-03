<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostagemController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\QuemsomosController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\sobreController;
use App\Http\Controllers\ComentariosController;
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


Route::get('/quem_somos', [SiteController::class,'quemSomos'])->name('site.quem_somos.home');


Route::group(['prefix'=>'admin','middleware' => 'auth'], function(){
    Route::get('/',[AdminController::class, 'index'])->name('admin.home');
   
    
    Route::post('/comentarios',[ComentariosController::class,'store'])->name('comentarios.store');
    Route::delete('/comentarios/{id}', [ComentariosController::class,'destroy'])->name('comentarios.destroy');
    
    Route::get('/postagens', [PostagemController::class,'index'])->name('postagens.index');
    Route::get('/postagens/novo', [PostagemController::class,'create'])->name('postagens.create');
    Route::get('/postagens/{id}', [PostagemController::class,'show'])->name('postagens.show');
    Route::get('/postagens/editar/{id}', [PostagemController::class,'edit'])->name('postagens.edit');
    Route::any('/procurar',[PostagemController::class,'pesquisar'])->name('postagens.search');

    Route::get('/perfil',[RegisteredUserController::class,'edit'])->name('perfil.edit');
    Route::put('/perfil/{id}', [RegisteredUserController::class,'update'])->name('perfil.update');
    
    
    Route::post('/postagens', [PostagemController::class,'store'])->name('postagens.store');
    Route::put('/postagens/{id}', [PostagemController::class,'update'])->name('postagens.update');
    Route::delete('/postagens/{id}', [PostagemController::class,'destroy'])->name('postagens.destroy');
    
});








require __DIR__.'/auth.php';
require __DIR__.'/site.php';