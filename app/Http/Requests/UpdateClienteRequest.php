<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'idAgente' => 'required',
            'nome' => 'required',
            'apelido' => 'required',
            'genero'=>'required',
            'paisNaturalidade' => 'nullable',
            'dataNasc' => 'nullable',
            'obsPessoais' => 'nullable',
            'obsAgente'=> 'nullable',
            'fotografia' => 'nullable',

            'num_docOficial'=> 'nullable',
            'validade_docOficial'=> 'nullable', /* data de validade do CC */
            'img_docOficial'=> 'nullable',
            'NIF' => 'nullable',

            'numPassaporte'=> 'nullable',
            'dataValidPP'=> 'nullable',
            'passaportPaisEmi'=> 'nullable',
            'localEmissaoPP'=> 'nullable',
            'img_Passaporte'=> 'nullable',

            'nivEstudoAtual' => 'nullable',
            'nomeInstituicaoOrigem' => 'nullable',
            'cidadeInstituicaoOrigem' => 'nullable',
            'obsAcademicas' => 'nullable',

            'telefone1' => 'nullable',
            'telefone2' => 'nullable',
            'email' => 'nullable',
            'moradaResidencia' => 'nullable',
            'morada' => 'nullable',
            'cidade' => 'nullable',
            'nomePai' => 'nullable',
            'telefonePai'  => 'nullable',
            'emailPai' => 'nullable',
            'nomeMae' => 'nullable',
            'telefoneMae' => 'nullable',
            'emailMae' => 'nullable',


            'IBAN' => 'nullable',
            'obsFinanceiras' => 'nullable',

            'refCliente' => 'nullable',

            'estado' => 'nullable',
            'editavel' => 'nullable',

        ];
    }
}
