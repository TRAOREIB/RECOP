<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class PiecesJointesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

   //  protected $redirectRoute="piecesjointes.index";

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
			 	'photo' => 'bail|required|mimes:png,jpg,jpeg,pdf|max:2048',
				'cv' => 'bail|required|mimes:doc,docx,pdf|max:2048',
			
				'pjcnib' => 'bail|required|mimes:png,jpg,jpeg,pdf|max:2048',
				'pjcartepresse' => 'bail|required|mimes:png,jpg,jpeg,pdf|max:2048',
				
				
            //'bail|required|mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:2048',
        ];
    }
}
