<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public readonly Livro $livro;

    public function __construct()
    {
        $this->livro = new Livro();
    }

    public function index() 
    {
        $livros = $this->livro->all();
        return view('livros/livros', ['livros' => $livros]);
    }

    public function create()
    {
        return view('livros/livro_create');
    }

    public function store(Request $request)
    {
        $created = $this->livro->create([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
        ]);

        if ($created) {
            return redirect()->back()->with('message', 'Successfully created');
        }
        return redirect()->back()->with('message', 'Erro create');
    }

    public function show(livro $livro)
    {
        return view('livros/livro_show', ['livro' => $livro]);
    }

    public function edit(livro $livro)
    {
        return view('livros/livro_edit', ['livro' => $livro]);
    }

    public function update(Request $request, string $id)
    {
        $updated = $this->livro->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->back()->with('message', 'Successfully updated');
        }
        return redirect()->back()->with('message', 'Erro update');
    }

    public function destroy(string $id)
    {
        $this->livro->where('id', $id)->delete();
        return redirect()->route('livros.index');
    }
}
