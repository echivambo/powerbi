<?php

namespace App\Http\Controllers;

use App\Cabecalho;
use Illuminate\Http\Request;

class CabecalhoClontroller extends Controller
{
    private $cabecalho;
    public function __construct(Cabecalho $cabecalho)
    {
        $this->cabecalho = $cabecalho;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cabecalhos = $this->cabecalho->all();
        return json_encode(array("encomendas" => $cabecalhos));
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

        $result = Cabecalho::create([
            'data_consulta' => $data['data_consulta'],
            'numero_consulta' => $data['numero_consulta'],
            'nid_csr_pf' => $data['nid_csr_pf'],
            'nid_tarv' => $data['nid_tarv'],
            'parceiro_presente_na_csr_pf' => $data['parceiro_presente_na_csr_pf'],
            'user_id' => $data['user_id'],
        ]);

        if($result){
            //making success response
            $response['error'] = false;
            $response['message'] = 'Encomenda salva com sucesso!';
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
        return Cabecalho::find($id);
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
        $this->cabecalho = Cabecalho::findOrFail($id);
        $this->cabecalho->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cabecalho::find($id)->delete();

        return 204;
    }
}
