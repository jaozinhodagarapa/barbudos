<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AgendaFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'profissionalId' => 'required',
            'clienteId' => 'required',
            'servicoId' => 'required',
            'datahora' => 'required|date',
            'tipopagamento' => 'required|max:20|min:3',
            'valor' => 'required|decimal:2,4'
        ];
    }
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => $validator->errors()
        ]));
    }

    public function messages()
    {
        return[
        'profisssionalId.required' => 'Campo profissional é obrigatório',
        'clienteId.required' => 'Campo cliente é obrigatório',
        'servicoId.required' => 'Campo serviço é obrigatório',
        'datahora.required' => 'Campo data é obrigatório',
        'datahora.date' => 'Formato Inválido',
        'tipopagamento.required' => 'Campo pagamento é obrigatório',
        'tipopagamento.max' => 'Campo pagamento deve conter no maximo 20 caracteres',
        'tipopagamento.min' => 'Campo pagamento deve conter no minimo 3 caracteres',
        'valor.required' => 'Campo valor é obrigatório',
        'valor.decimal' => 'Este campo so aceita numero decimal'
        ];
    }
}
