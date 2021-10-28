<?php

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\RecadoController;
use App\Http\Controllers\UsuariosController;
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
    return view('home', ['pagina' => 'home']);
})->name('home');

Route::get('produtos', [ProdutosController::class, 'index'])->name('produtos');

Route::get('/produtos/inserir', [ProdutosController::class, 'create'])->name('produtos.inserir');

Route::post('/produtos/inserir', [ProdutosController::class, 'insert'])->name('produtos.gravar');

Route::get('/produtos/{prod}', [ProdutosController::class, 'show'])->name('produtos.show');

Route::get('/produtos/{prod}/editar', [ProdutosController::class, 'edit'])->name('produtos.edit');

Route::put('/produtos/{prod}/editar', [ProdutosController::class, 'update'])->name('produtos.update');

Route::get('/produtos/{prod}/apagar', [ProdutosController::class, 'remove'])->name('produtos.remove');

Route::delete('/produtos/{prod}/apagar', [ProdutosController::class, 'delete'])->name('produtos.delete');

Route::get('usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');

Route::prefix('usuarios')->group(function() {
    
    Route::get('/inserir', [UsuariosController::class, 'create'])->name('usuarios.inserir');
    Route::post('/inserir', [UsuariosController::class, 'insert'])->name('usuarios.gravar');

});

Route::get('/login', [UsuariosController::class, 'login'])->name('login');
Route::post('/login', [UsuariosController::class, 'login']);

Route::get('/logout', [UsuariosController::class, 'logout'])->name('logout');

Route::get('comentario', [RecadoController::class, 'index'])->name('comentarios');

Route::get('/comentario/inserir', [RecadoController::class, 'create'])->name('comentario.inserir');

Route::post('/comentario/inserir', [RecadoController::class, 'insert'])->name('comentario.gravar');

Route::get('/comentario/{rec}/editar', [RecadoController::class, 'edit'])->name('comentario.edit');

Route::put('/comentario/{rec}/editar', [RecadoController::class, 'update'])->name('comentario.update');

Route::get('/comentario/{rec}/apagar', [RecadoController::class, 'remove'])->name('comentario.remove');

Route::delete('/comentario/{rec}/apagar', [RecadoController::class, 'delete'])->name('comentario.delete');