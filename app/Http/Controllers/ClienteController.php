<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteFormRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function criarCliente(ClienteFormRequest $request)
    {
        $cliente = Cliente::create([
            'nome' => $request ->nome,
            'celular' => $request ->celular,
            'email'=> $request ->email,
            'cpf'=> $request ->cpf,
            'nascimento'=> $request ->nascimento,
            'cidade'=> $request ->cidade,
            'estado'=> $request ->estado,
            'pais'=> $request ->pais,
            'rua'=> $request ->rua,
            'numero'=> $request ->numero,
            'bairro'=> $request ->bairro,
            'cep'=> $request ->cep,
            'complemento'=> $request ->complemnto,
            'senha'=> $request ->senha,
        ]);
        return response()->json([
            "success" => true,
            "message" => "Cliente cadastrado",
            "data" => $cliente
           
        ], 200);
        if (count($cliente) > 0) {
            return response()->json([
                'status' => false,
                "message" => "O nome do cliente contem mais de 200 caracteres, e não pode ser cadastrado",
                'data' => $cliente
            ]);
        }

    }
    public function pesquisaPorNome(ClienteFormRequest $request)
    {
        $cliente = Cliente::where('nome', 'like', '%' . $request->nome . '%')->get();

        if (count($cliente) > 0) {

            return response()->json([
                'status' => true,
                'data' => $cliente
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => 'Não há resultado para pesquisa.'
        ]);
    }
    public function pesquisaCelular(ClienteFormRequest $request)
    {
        $cliente = cliente::where('celular', 'like', '%' . $request->celular . '%')->get();

        if (count($cliente) > 0) {

            return response()->json([
                'status' => true,
                'data' => $cliente
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => 'Não há resultado para pesquisa.'
        ]);
    }
    public function pesquisaCPF(ClienteFormRequest $request)
    {
        $cliente = cliente::where('cpf', 'like', '%' . $request->cpf . '%')->get();

        if (count($cliente) > 0) {

            return response()->json([
                'status' => true,
                'data' => $cliente
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => 'Não há resultado para pesquisa.'
        ]);
    }
    public function pesquisaEmail(ClienteFormRequest $request)
    {
        $cliente = cliente::where('email', 'like', '%' . $request->email . '%')->get();

        if (count($cliente) > 0) {

            return response()->json([
                'status' => true,
                'data' => $cliente
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => 'Não há resultado para pesquisa.'
        ]);
    }

    public function excluir($id)
    {
        $cliente = Cliente::find($id);
        if (!isset($cliente)) {
            return response()->json([
                'status' => false,
                'message' => "Cliente não encontrado"
            ]);
        }

        $cliente->delete();
        return response()->json([
            'status' => true,
            'message' => "Cliente excluído com sucesso"
        ]);
    }

    public function update( ClienteFormRequest $request)
    {
        $cliente = Cliente::find($request->id);

        if (!isset($cliente)) {
            return response()->json([
                'status' => false,
                'message' => "Serviço não encontrado"
            ]);
        }
       
        if(isset($request->nome)){
        $cliente-> nome = $request->nome;
        }
        if(isset($request->celular)){
        $cliente-> celular = $request->celular;
        }
        if(isset($request->email)){
        $cliente-> email = $request->email;
        }
        if(isset($request->cpf)){
        $cliente-> cpf = $request->cpf;
        }
        if(isset($request->nascimento)){
            $cliente-> nascimento = $request->nascimento;
        }
        if(isset($request->cidade)){
            $cliente-> cidade = $request->cidade;
        }
        if(isset($request->estado)){
            $cliente-> estado = $request->estado;
        }
        if(isset($request->pais)){
            $cliente-> pais = $request->pais;
        }
        if(isset($request->rua)){
            $cliente-> rua = $request->rua;
        }
        if(isset($request->numero)){
            $cliente-> numero = $request->numero;
        }
        if(isset($request->bairro)){
            $cliente-> bairro = $request->bairro;
        }
        if(isset($request->cep)){
            $cliente-> cep = $request->cep;
        }
        if(isset($request->complemento)){
            $cliente-> complemento = $request->complemneto;
        }
        if(isset($request->senha)){
            $cliente-> senha = $request->senha;
        }


        $cliente->update();

        return response()->json([
            'status' => true,
            'message' => "Serviço atualizado."
        ]);
       
    }

}