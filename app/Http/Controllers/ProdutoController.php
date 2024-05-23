<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->cod_empresa = $request->input('cod_empresa');
        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->valor = $request->input('valor');
        $produto->save();

        return response()->json($produto, 201);
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->cod_empresa = $request->input('cod_empresa');
        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->valor = $request->input('valor');
        $produto->save();

        return response()->json($produto);
    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return response()->json(null, 204);
    }
}