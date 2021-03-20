<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Estudiante;

use Illuminate\Support\Facades\DB;


class ListaController extends Controller
{
     public function index(Request $request)
     {

        $texto=trim($request->get ('texto'));
        $estudiante=DB::table ('estudiante')->select('Matricula','Nombre','Direccion')
        ->where ('matricula','=',$texto)->paginate(10);
        return view ('estudiante.index', compact('estudiante','texto'));
    }
        public function create()
        {
        //
        }

        public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {



    }

    public function update(Request $request, $id)
    {



    }

    public function destroy($id)
    {
        {

        }

    }
}
