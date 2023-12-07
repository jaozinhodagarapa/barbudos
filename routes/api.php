<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfissionalController;
use App\Http\Controllers\ServicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



//Serviço
Route::post('criarServico', [ServicoController::class, 'criarServico']);
Route::post('servico/pesquisa/Nome',[ServicoController::class, 'pesquisaPorNome']);
Route::delete('servico/delete/{id}',[ServicoController::class, 'excluir']);
Route::put('servico/update', [ServicoController::class, 'update']);
Route::get('/servico/retornarTodos', [ServicoController::class, 'retornarTudo']);
Route::get('servico/pesquisaId/{id}', [ServicoController::class, 'pesquisaId']);

//Cliente
Route::post('criarCliente', [ClienteController::class, 'criarCliente']);
Route::post('cliente/pesquisanome', [ClienteController::class, 'pesquisaPorNome']);
Route::post('cliente/pesquisacelular', [ClienteController::class, 'pesquisaCelular']);
Route::post('cliente/pesquisacpf', [ClienteController::class, 'pesquisaCPF']);
Route::post('cliente/pesquisaemail', [ClienteController::class, 'pesquisaEmail']);
Route::delete('cliente/excluir/{id}', [ClienteController::class, 'excluir']);
Route::put('cliente/update', [ClienteController::class, 'update']);
Route::get('cliente/retornarTodos', [ClienteController::class, 'retornarTudo']);
Route::get('cliente/pesquisaPorId/{id}', [ClienteController::class, 'pesquisaPorId']);
Route::put('cliente/esqueciSenha/{id}',[ClienteController::class, 'esqueciSenha']);
    
//Profissional
Route::post('criarProfissional', [ProfissionalController::class, 'criarProfissional']);
Route::post('profissional/pesquisanome', [ProfissionalController::class, 'pesquisaPorNome']);
Route::post('profissional/celular', [ProfissionalController::class, 'pesquisaCelular']);
Route::post('profisional/cpf', [ProfissionalController::class, 'pesquisaCPF']);
Route::post('profissional/email', [ProfissionalController::class, 'pesquisaEmail']);
Route::delete('profissional/excluir/{id}', [ProfissionalController::class, 'excluir']);
Route::put('profissional/update', [ProfissionalController::class, 'update']);
Route::get('profissional/retornarTodos', [ProfissionalController::class, 'retornarTodos']);
Route::get('profissional/pesquisaPor/{id}', [ProfissionalController::class, 'pesquisaPoRId']);
Route::put('profissional/esqueciSenha/{id}', [ProfissionalController::class, 'esqueciSenha']);

//Agenda
Route::post('criarAgenda',[AgendaController::class, 'criarAgenda']);
Route::post('agenda/pesquisaDataHora',[AgendaController::class, 'pesquisaPorDataHora']);
Route::get('agenda/retornaTodos', [AgendaController::class, 'retornarTudo']);
Route::delete('agenda/delete/{id}',[AgendaController::class, 'excluiAgenda']);
Route::put('agenda/update', [AgendaController::class, 'updateAgenda']);
Route::post('criarAgendaProfissional', [AgendaController::class, 'criarHorarioProfissional']);
Route::post('criarAgendaFindProfissional', [AgendaController::class, 'agendaFindTimeProfissional']);

