<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() // @audit-ok
    {
        return Categoria::all();
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
    public function store(Request $request) // @audit-ok
    {
        if( ! $request->descricao )
        {
            return response()->json(["success"=>false, "msg"=> "Campo descricao obrigatório"], 400);
        }

        if( gettype($request->descricao) != 'string' )
        {
            return response()->json(["success"=>false, "msg"=> "Tipo do valor inválido! Certifique-se de estar enviando um string e tente novamente"], 400);
        }

        $categoria              = new Categoria;
        $categoria->descricao   = $request->descricao;

        if( $categoria->save() )
        {
            return response()->json(["success"=>true, "msg"=> "Categoria criada com sucesso"], 201);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) // @audit-ok
    {
        return Categoria::find($id);
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

        if( ! $request->descricao )
        {
            return response()->json(["success"=>false, "msg"=> "Campo descricao obrigatório"], 400);
        }

        if( gettype($request->descricao) != 'string' )
        {
            return response()->json(["success"=>false, "msg"=> "Tipo do valor inválido! Certifique-se de estar enviando um string e tente novamente"], 400);
        }

        $categoria = Categoria::find($id);
        $categoria->descricao = $request->descricao;

        if( ! $categoria->save() )
        {
            return response()->json(['success' => false, 'msg' => 'Erro ao editar categoria'],400);
        }
        return response()->json(['success' => true, 'msg' => 'Categoria editada com sucesso'],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) // @audit-ok
    {
        try
        {
            if( !Categoria::destroy($id) )
            {
                throw new \Exception("Erro ao deletar.");
            }

            return response()->json(['success' => true, 'msg' => 'Categoria deletada com sucesso.'], 200);
        }
        catch (\Exception $th)
        {
            return response()->json(['success' => false, 'msg' => $th->getMessage()], 400);
        }
    }
}
