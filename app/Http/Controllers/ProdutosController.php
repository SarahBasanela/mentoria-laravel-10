<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index ()
    {
        $findProduto = Produto::all();
        //dd($findProduto); //dd é utilizado para debug, tipo print ou print_r
        return view('pages.produtos.paginacao', compact('findProduto'));
    }
}
