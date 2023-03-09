<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Se guarda el archivo en una variable
        $file = $request->file('import_file');
        // Con este comando propio de la libreria importamos los datos que se envia en el documento
        Excel::import(new UsersImport, $file);
        // Una vez todo este realizado redireccionamos al home y mostramos un mensaje
        return redirect()->route('home')->with('success', 'Datos importados correctamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
