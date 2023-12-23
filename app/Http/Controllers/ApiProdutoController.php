<?php

// app/Http/Controllers/ApiProdutoController.php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    public function show($id)
    {
        $produto = Produto::find($id);

        if (!$produto) {
            return response()->json(['message' => 'Produto não encontrado'], Response::HTTP_NOT_FOUND);
        }

        return response()->json($produto);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required|numeric',
        ]);

        $produto = Produto::create($request->all());

        return response()->json($produto, Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);

        if (!$produto) {
            return response()->json(['message' => 'Produto não encontrado'], Response::HTTP_NOT_FOUND);
        }

        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required|numeric',
        ]);

        $produto->update($request->all());

        return response()->json($produto, Response::HTTP_OK);
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);

        if (!$produto) {
            return response()->json(['message' => 'Produto não encontrado'], Response::HTTP_NOT_FOUND);
        }

        $produto->delete();

        return response()->json(['message' => 'Produto excluído com sucesso'], Response::HTTP_OK);
    }
}
