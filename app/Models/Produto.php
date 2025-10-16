<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'valor',
    ];

    public function getProdutosPesquisarIndex(string $search = '')
    {

        $produto = self::where('nome', 'LIKE', '%' . $search . '%')->get();

        return $produto;
    }
}
