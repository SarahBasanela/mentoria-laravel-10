<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class ProdutosController extends Controller
{
    var $produto;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function index(Request $request)
    {
        $pesquisar = $request->pesquisar;
        $findProduto = $this->produto->getProdutosPesquisarIndex($pesquisar ?? '');
        //dd($findProduto); //dd é utilizado para debug, tipo print ou print_r
        return view('pages.produtos.paginacao', compact('findProduto'));
    }

    public function delete(Request $request){

    }
}
