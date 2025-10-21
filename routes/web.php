<?php

use App\Http\Controllers\ProdutosController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

Route::get('/', function () {
    return view('index');
});
// http://localhost:8989/produtos/MaisAlgumaCoisa
Route::prefix('produtos')->group(function(){
    Route::get('/', [ProdutosController::class, 'index'])->name('produto.index');
    // Cadastro Produto
    Route::get('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto'])->name('cadastrar.produto');
    Route::post('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto'])->name('cadastrar.produto');
    // Update Produtos
    Route::get('/atualizarProduto/{id}', [ProdutosController::class, 'atualizarProduto'])->name('atualizar.produto');
    Route::put('/atualizarProduto/{id}', [ProdutosController::class, 'atualizarProduto'])->name('atualizar.produto');

    Route::delete('/', [ProdutosController::class, 'delete'])->name('produto.delete');
    
});