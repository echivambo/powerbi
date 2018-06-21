<?php

namespace App\Http\Controllers;

use App\DadosPessoais;
use Illuminate\Http\Request;

class DadosPessoaisController extends Controller
{
    private $dadosPessoais;
    public function __construct(DadosPessoais $dadosPessoais)
    {
        $this->dadosPessoais = $dadosPessoais;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dadosPessoaiss = $this->dadosPessoais->all();
        return json_encode(array("dadosPessoais" => $dadosPessoaiss));
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

        $result = DadosPessoais::create([
            'nome' => $data['nome'],
            'sexo' => $data['sexo'],
            'faixa_etaria' => $data['faixa_etaria'],
            'residencia' => $data['residencia'],
            'contacto' => $data['contacto'],
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
        return DadosPessoais::find($id);
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
        $this->dadosPessoais = DadosPessoais::findOrFail($id);
        $this->dadosPessoais->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DadosPessoais::find($id)->delete();

        return 204;
    }}
