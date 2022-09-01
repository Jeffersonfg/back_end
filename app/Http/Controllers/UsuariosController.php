<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Usuario;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Usuario::all(); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Usuario::create([
            "nome"=> $request->nome,
            "cnpj"=> $request->cnpj,
            "email"=> $request->email,
            "senha"=> $request->senha,
            "telefone"=> $request->telefone
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Usuario::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function atualizar(Request $request, $id)
    {
        Usuario::update([
            "id"=> $id,
            "nome"=> $request->nome,
            "cnpj"=> $request->cnpj,
            "email"=> $request->email,
            "senha"=> $request->senha,
            "telefone"=> $request->telefone

        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        return $usuario->delete();
    }
}
