<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class StoreDocstockRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'tipo' => 'required|in:Pessoal,Academico,Financeiro,Familiar,País,Outros',
            'tipoDocumento' => 'required|max:255',
        ];
    }
}
