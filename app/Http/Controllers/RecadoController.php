<?php

namespace App\Http\Controllers;

use App\Models\Recados;
use Illuminate\Http\Request;

class RecadoController extends Controller
{
    //página principal
    public function index()
    {
        $produtos = Recados::orderBy('id', 'desc')->get();
        return view('comentario.index', ['rec' => $produtos, 'pagina'=>'comentario']);
    }

    //criar comentario
    public function create()
    {
        return view('comentario.create', ['pagina'=>'comentario']);
    }

    //inserir comentário
    public function insert(Request $form)
    {
        $recado = new Recados();

        $recado->nome = $form->nome;
        $recado->comentario = $form->comentario;

        $recado->save();

        return redirect()->route('comentarios');
    }

    //editar comentário
    public function edit(Recados $rec)
    {
        return view('comentario.edit', ['recados'=> $rec, 'pagina'=>'comentario']);
    }

    public function update(Request $form, Recados $recado)
    {
        $recado->nome = $form->nome;
        $recado->comentario = $form->comentario;

        $recado->save();

        return redirect()->route('comentarios');
    }

    public function remove(Recados $rec)
    {
        return view('comentario.remove', ['rec' => $rec, 'pagina'=>'comentario']);
    }

    public function delete(Recados $rec)
    {
        $rec->delete();

        return redirect()->route('comentarios');
    }
}
