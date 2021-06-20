<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemandeurRequest extends FormRequest
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
            'nom' => 'bail|required|alpha|max:50',
			'prenom' => 'bail|required|alpha|max:50',
			'profession' => 'bail|required|alpha|max:50',			
			'datenaissance' => 'bail|required|date',
			'lieunaissance'=> 'bail|required|alpha|max:50',
			'nationalite'	=> 'bail|required|alpha|max:50',
			'telephone'=> 'bail|required|numeric',
			'mail'=> 'bail|required|email|max:50|unique:demandeur',
			'identifiant'=> 'bail|required|alphanum|max:50|unique:users',			
			'lieuresidence' => 'bail|required|max:50',
			'cnib' => 'bail|required|max:20',
			'datedelivcnib' => 'bail|required|date',
			'dateexpircnib' => 'bail|required|date',	
            'telephoneresidence'=> 'bail|required|numeric',           
			'personneprevenir' => 'bail|required|max:50',
			'telephonepersp'=> 'bail|required|max:20',		
			'organe'=> 'bail|required|max:50',
			'telorgane'=> 'bail|required|max:20',
			'adressestruct' => 'bail|required|max:50',
        ];
    }
}
