<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class cursoController extends Controller
{
    public function index(){

        $cursos= Curso::orderBy('id','desc')->paginate(10);

        return view('cursos.index', ['cursos'=>$cursos]);

    }

    public function create(){

        return view('cursos.create');
        
    }

    public function store(StoreCurso $request){

       Curso::create($request->all());

        return redirect()->route('cursos.index');

    }

    public function show(Curso $curso){

        return view('cursos.show', compact('curso'));
        
    }

    public function edit(Curso $curso){

        return view('cursos.edit', compact('curso'));
        
    }

    public function update(Curso $curso, StoreCurso $request){

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);
        
    }

    public function destroy(Curso $curso){

        $curso->delete();

        return redirect()->route('cursos.index');
        
    }

}
