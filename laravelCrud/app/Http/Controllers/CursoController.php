<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(StoreCurso $request)
    {
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso)->with('create', '¡Curso creado correctamente!');
    }

    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(StoreCurso $request, Curso $curso)
    {
        $curso->update($request->all());

        return redirect()->route('cursos.show', compact('curso'))->with('update', '¡Curso actualizado correctamente!');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index')->with('delete', '¡Curso eliminado correctamente!');
    }
}
