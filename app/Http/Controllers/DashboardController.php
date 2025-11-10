<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\User;
use App\Models\Venda;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
   public function index()
   {
        $totalProdutoCadastrado = $this->bucaTotalProdutoCadastrado();
        $totalClienteCadastrado = $this->bucaTotalClienteCadastrado();
        $totalVendasCadastrada = $this->bucaTotalVendasCadastrada();
        $totalUsuariosCadastrado = $this->bucaTotalUsuariosCadastrado();

        return view('pages.dashboard.dashboard', compact('totalProdutoCadastrado', 'totalClienteCadastrado', 'totalVendasCadastrada', 'totalUsuariosCadastrado'));
   }

   public function bucaTotalProdutoCadastrado()
   {
        $findProduto = Produto::all()->count();

        return $findProduto;
   }

   public function bucaTotalClienteCadastrado()
   {
        $findCliente = Cliente::all()->count();

        return $findCliente;
   }

   public function bucaTotalVendasCadastrada()
   {
        $findVendas = Venda::all()->count();

        return $findVendas;
   }

   public function bucaTotalUsuariosCadastrado()
   {
        $findUsuario = User::all()->count();

        return $findUsuario;
   }
};