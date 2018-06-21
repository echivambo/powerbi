<?php

namespace App\Http\Controllers;

use App\Encomenda;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class EncomendaController extends Controller
{
    private $encomenda;
    public function __construct(Encomenda $encomenda)
    {
        $this->encomenda = $encomenda;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $encomendas = $this->encomenda->all();
       echo json_encode(array("encomendas" => $encomendas));
    }

    public function apk_index()
    {
         $encomendas = $this->encomenda->all();
        echo json_encode(array("encomendas" => $encomendas));
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

    private function createEncomenda(Request $request){
        $data = $request->all();

        $result = Encomenda::create([
            'numero_transacao' => $data['numero_transacao'],
            'nuemro_item_transacao' => $data['nuemro_item_transacao'],
            'data_encomenda' => $data['dataEncomenda'],
            'data_entrega' => $data['dataEntrega'],
            'cliente_id' => $data['clienteId'],
            'nome_cliente' => $data['nomeCliente'],
            'estabelecimento' => $data['estabelecimento'],
            'quantidade' => $data['quantidade'],
            'descricao_produto' => $data['descricaoProduto'],
            'produto_id' => $data['produtoId'],
            'comentario' => $data['comentario'],
            'unidade_medida' => $data['unidadeMedida'],
            'user_id' => $data['userId'],
        ]);

        //if data inserts successfully
        if($result){
            //making success response
            $response['error'] = false;
            $response['message'] = 'Encomenda salva com sucesso!';
        }else{
            //if not making failure response
            $response['error'] = true;
            $response['message'] = 'Erro ao salvar, tente novamente';
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $result = Encomenda::create([
            'numero_transacao' => $data['numero_transacao'],
            'nuemro_item_transacao' => $data['nuemro_item_transacao'],
            'data_encomenda' => $data['data_encomenda'],
            'data_entrega' => $data['data_entrega'],
            'cliente_id' => $data['cliente_id'],
            'nome_cliente' => $data['nome_cliente'],
            'estabelecimento' => $data['estabelecimento'],
            'quantidade' => $data['quantidade'],
            'descricao_produto' => $data['descricao_produto'],
            'produto_id' => $data['produto_id'],
            'comentario' => $data['comentario'],
            'unidade_medida' => $data['unidade_medida'],
            'user_id' => $data['user_id'],
        ]);

         return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Encomenda::find($id);
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
        $this->encomenda = Encomenda::findOrFail($id);
        $this->encomenda->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Encomenda::find($id)->delete();

        return 204;
    }
}
