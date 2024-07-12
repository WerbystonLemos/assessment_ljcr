<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return json_encode(['msg' => 'Criar RN para mostrar todas Categorias' ]);
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
        return json_encode(['id' => $request->id, 'request' => $request, 'msg' => 'Criar RN para salvar Categoria' ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return json_encode(['id' => $id, 'msg' => 'Criar RN para mostrar!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return json_encode(['id' => $id, 'msg' => 'Criar RN para delete!']);
    }
}
