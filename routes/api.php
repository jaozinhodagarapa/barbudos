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
Route::post('noomes',[ServicoController::class, 'pesquisaPorNome']);
Route::delete('delete/{id}',[ServicoController::class, 'excluir']);
Route::put('update', [ServicoController::class, 'update']);
Route::get('retornarTudos', [ServicoController::class, 'retornarTudo']);
Route::get('pesquisaId/{id}', [ServicoController::class, 'pesquisaId']);

//Cliente
Route::post('criarCliente', [ClienteController::class, 'criarCliente']);
Route::post('nomes', [ClienteController::class, 'pesquisaPorNome']);
Route::post('celular', [ClienteController::class, 'pesquisaCelular']);
Route::post('cpf', [ClienteController::class, 'pesquisaCPF']);
Route::post('email', [ClienteController::class, 'pesquisaEmail']);
Route::delete('excluir/{id}', [ClienteController::class, 'excluir']);
Route::put('updatee', [ClienteController::class, 'update']);
Route::get('retornarTudus', [ClienteController::class, 'retornarTudo']);
Route::get('pesquisaPorId/{id}', [ClienteController::class, 'pesquisaPorId']);
Route::put('cliente/esqueciSenha',[ClienteController::class, 'esqueciSenha']);
    
//Profissional
Route::post('criarProfissional', [ProfissionalController::class, 'criarProfissional']);
Route::post('nomess', [ProfissionalController::class, 'pesquisaPorNome']);
Route::post('celular', [ProfissionalController::class, 'pesquisaCelular']);
Route::post('cpf', [ProfissionalController::class, 'pesquisaCPF']);
Route::post('email', [ProfissionalController::class, 'pesquisaEmail']);
Route::delete('excluir/{id}', [ProfissionalController::class, 'excluir']);
Route::put('updateProfissional', [ProfissionalController::class, 'update']);
Route::get('retornarTodos', [ProfissionalController::class, 'retornarTodos']);
Route::get('pesquisaPoR/{id}', [ProfissionalController::class, 'pesquisaPoRId']);









Route::post('criarAgenda',[AgendaController::class, 'criarAgenda']);

