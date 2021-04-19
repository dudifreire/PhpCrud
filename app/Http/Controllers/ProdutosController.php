<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function create()
    {
        return view('produto.create');
    }

    public function store(Request $request)
    {
        Produto::create([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade
        ]);

        return $this->response("Produto Criado com sucesso!");
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.show', ['produto' => $produto]);
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.edit', ['produto' => $produto]);
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::FindOrFail($id);

        $produto->update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade
        ]);

        return $this->response("Produto atualizado com sucesso!");
    }

    public function delete($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.delete', ['produto' => $produto]);
    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();


        return $this->response("Produto excluído  com sucesso!");
    }
}
