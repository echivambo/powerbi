<?php

namespace App\Http\Controllers;

use App\PlaneamentoFamiliar;
use Illuminate\Http\Request;

class PlaneamentoFamiliarClontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planeamentoFamiliar = PlaneamentoFamiliar::all();
        return json_encode(array("planeamentoFamiliar" => $planeamentoFamiliar));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //making an array to store the response
        $response = array();

        $data = $request->all();

        $result = PlaneamentoFamiliar::create([
            'utente_pf' => $data['utente_pf'],
            'metodo_do_pf' => $data['metodo_do_pf'],
            'tipo_do_metodo_do_pf' => $data['tipo_do_metodo_do_pf'],
            'estado_da_utente_no_metodo' => $data['estado_da_utente_no_metodo'],
            'total_distribuido' => $data['total_distribuido'],
            'metodo_anterior' => $data['metodo_anterior'],
            'cabecalho_id' => $data['cabecalho_id'],
            'user_id' => $data['user_id'],
        ]);

        if($result){
            //making success response
            $response['error'] = false;
            $response['message'] = 'Salvo com sucesso!';
        }else{
            //if not making failure response
            $response['error'] = true;
            $response['message'] = 'Erro ao salvar, tente novamente';
        }
        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
