<?php

namespace App\Http\Controllers;

use App\ExameClinico;
use Illuminate\Http\Request;

class ExameClinicoClontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return json_encode(array("exameClinico" => ExameClinico::all()));
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

        $result = ExameClinico::create([
            'rastreio_e_tratamento_de_its' => $data['rastreio_e_tratamento_de_its'],
            'outras_patologias' => $data['outras_patologias'],
            'fez_exame_clinico_da_mama' => $data['fez_exame_clinico_da_mama'],
            'exame_clinico_da_mama' => $data['exame_clinico_da_mama'],
            'tratado' => $data['tratado'],
            'transferida' => $data['transferida'],
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
