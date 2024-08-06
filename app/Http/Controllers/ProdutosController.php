<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function create(){
        return view('produtos.create');
    }    

    public function store(Request $request){
        Produto::create([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade
        ]);

        return "Produto criado com sucesso!";
    }

    public function show($id){
        $produto = Produto::findOrFail($id);
        return view('produtos.show', ['produto' => $produto]);
    }

    public function edit($id){
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }

}
