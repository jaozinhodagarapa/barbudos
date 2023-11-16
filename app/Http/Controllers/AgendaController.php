<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgendaFormRequest;
use App\Http\Requests\AgendaFormRequestUpdate;
use App\Http\Requests\AgendaUpdateFormRequest;
use App\Http\Requests\AgendaUpdateFormRequestUpdate;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function criarAgenda(AgendaFormRequest $request)
    {
        $agenda = Agenda::create([
            'clienteId' => $request->clienteId,
            'profissionalId' => $request->profissionalId,
            'dataHora' => $request->dataHora,
            'servicoId' => $request->servicoId,
            'pagamento' => $request->pagamento,
            'valor' => $request->valor
        ]);

        return response()->json([
            "success" => true,
            "message" => "agenda cadastrado",
            "data" => $agenda
        ], 200);
       
    }
    
    public function pesquisaPorDataHora(Request $request)
    {
        $agenda= Agenda::where('dataHora', 'like', '%' . $request->dataHora . '%')->get();

        if (count($agenda)>0) {
            return response()->json([
                'status' => true,
                'data' => $agenda

            ]);
        }   
        return response()->json([
            'status' => false,
            "message" => "nada foi encontrado com o nome procurado",
            'data' => $agenda
        ]);
    }
    
    public function pesquisarPorId($id)
    {
        $agenda = Agenda::find($id);

        if ($agenda == null) {
            return response()->json([
                'status' => false,
                'message' => "Usuario não encontrada"
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => 'Não há resultado para pesquisa.'
        ]);
    }

    public function excluiAgenda($id)
    {
        
        $agenda = Agenda::find($id);
        if (!isset($agenda)) {
            return response()->json([
                'status' => false,
                'message' => " não encontrado"
            ]);
        }

        $agenda->delete();
        return response()->json([
            'status' => true,
            'message' => " excluído com sucesso"
        ]);
    }
    public function updateAgenda(AgendaFormRequestUpdate $request)
    {
        $agenda = Agenda::find($request->id);

        if (!isset($agenda)) {
            return response()->json([
                'status' => false,
                'message' => "agenda não encontrado"
            ]);
        }
       
        if(isset($request->clienteId)){
        $agenda-> clienteId = $request->clienteId;
        }
        if(isset($request->profissionalId)){
        $agenda-> profissionalId = $request->profissionalId;
        }
        if(isset($request->dataHora)){
        $agenda-> dataHora = $request->dataHora;
        }
        if(isset($request->servicoId)){
        $agenda-> servicoId = $request->servicoId;
        }
        if(isset($request->pagamento)){
            $agenda-> pagamento = $request->pagamento;
        }
        if(isset($request->valor)){
            $agenda-> valor = $request->valor;
        }

        $agenda->update();

        return response()->json([
            'status' => true,
            'message' => " atualizado."
        ]);
       
    }
    public function retornarTudo(){
        $agenda = Agenda::all();

        if(count($agenda)==0){
            return response()->json([
                'status'=> false,
                'message'=> " nao encontrado"
            ]);
        }
        return response()->json([
            'status'=> true,
            'data' => $agenda
        ]);
       }
}