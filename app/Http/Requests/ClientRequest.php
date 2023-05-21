<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClientRequest extends FormRequest
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
            "id_clt" => [
                "required",
                Rule::unique('clients', 'id_clt')->ignore($this->route('client')),
            ],
            "nom" => "required|string",
            "prenom" => "required|string",
            "adresse" => "required|string"
        ];
    }

    public function messages()
    {
        return [
            "id_clt.unique" => "The ID client already exists.",
        ];
    }
}
