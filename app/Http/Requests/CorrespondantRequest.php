<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CorrespondantRequest extends FormRequest
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
			'prenom' => 'bail|required|string|max:50',
			'profession' => 'bail|required|alpha|max:50',
			'sexe' => 'bail|required',
			'datenaissance' => 'bail|required|date',
			'lieunaissance'=> 'bail|required|alpha|max:50',
			'nationalite'	=> 'bail|required|alpha|max:50',
			'telephone'=> 'bail|required|numeric',
			'telephone2'=> 'bail|required|numeric',
			'mail'=> 'bail|required|email|max:50|unique:correspondant',
			'identifiant'=> 'bail|required|alphanum|max:50|unique:users',			
			'lieuresidence' => 'bail|required|max:50',
			'cnib' => 'bail|required|max:20',
			'datedelivcnib' => 'bail|required|date',
			'dateexpircnib' => 'bail|required|date',
			'numcartepresse' => 'bail|required|max:20',
			'personneprevenir' => 'bail|required|max:50',
			'telephonepersp'=> 'bail|required|max:20',
			'refjournal'=> 'bail|required|max:255',
			'parcourspro'=> 'bail|required|max:255',
			'organe'=> 'bail|required|max:50',
			'typepresse'=> 'bail|required',
			'telorgane'=> 'bail|required|max:20',
			'adresseorgane' => 'bail|required|max:50',
			
			
			
            //
        ];
    }
}
