<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Empresa extends Controller
{
    public function index()
    {
        $empresas = Empresa::all();
        return response()->json($empresas);
    }

    public function show($id)
    {
        $empresa = Empresa::findOrFail($id);
        return response()->json($empresa);
    }

    public function store(Request $request)
    {
        $empresa = new Empresa();
        $empresa->nome_empresa = $request->input('nome_empresa');
        $empresa->desc_empresa = $request->input('desc_empresa');
        $empresa->save();

        return response()->json($empresa, 201);
    }

    public function update(Request $request, $id)
    {
        $empresa = Empresa::findOrFail($id);
        $empresa->nome_empresa = $request->input('nome_empresa');
        $empresa->desc_empresa = $request->input('desc_empresa');
        $empresa->save();

        return response()->json($empresa);
    }

    public function destroy($id)
    {
        $empresa = Empresa::findOrFail($id);
        $empresa->delete();

        return response()->json(null, 204);
    }
}
