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
Route::post('nome',[ServicoController::class, 'pesquisaPorNome']);
Route::delete('delete/{id}',[ServicoController::class, 'excluir']);
Route::put('update', [ServicoController::class, 'update']);
Route::get('retornarTudo', [ServicoController::class, 'retornarTudo']);

//Cliente
Route::post('criarCliente', [ClienteController::class, 'criarCliente']);
Route::post('nome', [ClienteController::class, 'pesquisaPorNome']);
Route::post('celular', [ClienteController::class, 'pesquisaCelular']);
Route::post('cpf', [ClienteController::class, 'pesquisaCPF']);
Route::post('email', [ClienteController::class, 'pesquisaEmail']);
Route::delete('excluir/{id}', [ClienteController::class, 'excluir']);
Route::put('update', [ClienteController::class, 'update']);
Route::get('retornarTudo', [ClienteController::class, 'retornarTudo']);
    
//Profissional
Route::post('criarProfissional', [ProfissionalController::class, 'criarProfissional']);
Route::post('nome', [ProfissionalController::class, 'pesquisaPorNome']);
Route::post('celular', [ProfissionalController::class, 'pesquisaCelular']);
Route::post('cpf', [ProfissionalController::class, 'pesquisaCPF']);
Route::post('email', [ProfissionalController::class, 'pesquisaEmail']);
Route::delete('excluir/{id}', [ProfissionalController::class, 'excluir']);
Route::put('update', [ProfissionalController::class, 'update']);
Route::get('retornarTudo', [ProfissionalController::class, 'retornarTudo']);

Route::post('criarAgenda',[AgendaController::class, 'criarAgenda']);
