<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public readonly Categoria $categoria;

    public function __construct()
    {
        $this->categoria = new Categoria();
    }

    public function index() 
    {
        $categorias = $this->categoria->all();
        return view('categorias/categorias', ['categorias' => $categorias]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Categoria $categoria)
    {
        return view('categorias/categoria_show', ['categoria' => $categoria]);
    }

    public function edit(Categoria $categoria)
    {
        //
    }

    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    public function destroy(string $id)
    {
        $this->categoria->where('id', $id)->delete();
        return redirect()->route('categorias.index');
    }
}
