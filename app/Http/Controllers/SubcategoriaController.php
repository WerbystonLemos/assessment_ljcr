<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Subcategoria;
use Illuminate\Http\Request;

class SubcategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Subcategoria::all();
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
        $res = $this->validacao($request);
        if ( ! $res['success'] )
        {
            return response()->json( $res, 400);
        }

        $subcategoria = new Subcategoria;
        $subcategoria->descricao = $request->descricao;
        $subcategoria->id_categoria = $request->id_categoria;
        if( !$subcategoria->save() )
        {
            return response()->json(['success'=>false, 'msg'=>'Erro ao salvar subcategoria'], 400);
        }
        return response()->json(['success'=>true, 'msg'=>'Subcategoria salva com sucesso.'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Subcategoria::find($id);
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
        $res = $this->validacao($request);
        if ( ! $res['success'] )
        {
            return response()->json( $res, 400);
        }

        $subcategoria               = Subcategoria::find($id);
        $subcategoria->descricao    = $request->descricao;
        $subcategoria->id_categoria = $request->id_categoria;
        if( ! $subcategoria->save() )
        {
            return response()->json(['success'=>false, 'msg'=>'Erro ao editar Subcategoria.']);
        }
        return response()->json(['success'=>true, 'msg'=>'Subcategoria editada com sucesso.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try
        {
            if( ! Subcategoria::destroy($id) )
            {
                return response()->json(['success' => false, 'msg' => 'Erro ao deletar Subcategoria.'], 400);
            }
            return response()->json(['success' => true, 'msg' => 'Subcategoria deletada com sucesso.'], 200);
        }
        catch (\Exception $th)
        {
            return response()->json(['success' => false, 'msg' => $th->getMessage() ], 400);
        }
    }

    private function validacao($request)
    {
        if( ! $request->descricao )
        {
            return (["success"=>false, "msg"=> "Campo descricao obrigatório"]);
        }

        if( gettype($request->descricao) != 'string' )
        {
            return (["success"=>false, "msg"=> "Tipo do valor inválido! Certifique-se de estar enviando um string e tente novamente"]);
        }

        if( ! $request->id_categoria )
        {
            return (["success"=>false, "msg"=> "Campo descricao obrigatório"]);
        }

        if( gettype($request->id_categoria) != 'integer' )
        {
            return (["success"=>false, "msg"=> "Tipo do valor inválido! Certifique-se de estar enviando um string e tente novamente"]);
        }

        return (["success"=>true, "msg"=> "Validado com sucesso"]);
    }
}
