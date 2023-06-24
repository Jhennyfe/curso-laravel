<?php

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

Route::get('/produtos', [ProdutosController::class,'index'])->name('produtos.index');
Route::get('/produtos', 'App\Http\Controllers\ProdutosController@index');
 //rota usada pra cadastrar produtos, usando formulários
Route::get('/produtos/create', [ProdutosController::class,'create'])->name('produtos.create');
          //há dois parâmetros, divididos por virgula, sendo o primeiro a URL pra procurar, a segunda é a classe, que tem que achar a ação    
          //a rota chama a controladora, que chama a ação   //users.index é igual a users/index
Route::get('/produtos/{id}', [ProdutosController::class,'show'])->name('produtos.show');
          //rota usada somente para guardar informações no bd, store
Route::put('/produtos/{id}', [ProdutosController::class,'update'])->name('produtos.update');
          //rota usada para o botão de atualizar, para poder atualizar através da função do edit
Route::get('/produtos/{id}/edit', [ProdutosController::class,'edit'])->name('produtos.edit');
          //rota usada para a função editar
Route::delete('/produtos/{id}/delete', [ProdutosController::class,'destroy'])->name('produtos.destroy');
  //rota usada para a função excluir
Route::post('/produtos', [ProdutosController::class,'store'])->name('produtos.store');
  // vai salvar as infos aqui, preparar pra poder mandar pra controladora, pra mandar pro bd        
