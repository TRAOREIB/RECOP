<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class objetRequest extends FormRequest
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
            //
            'nom' => 'bail|required|alpha|max:250',
            'numinv' => 'bail|required|numeric',
            'photo' => 'image|dimensions:min_width=50,min_height=50|mimes:jpeg,bmp,png',
            'nom' => 'bail|required|alpha|max:250',
            'nonvern' => 'bail|required|alpha|max:250',
            'localisation' => 'required|alpha_num|max:250',
            'typematiere' => 'required|alpha|max:250',

           
        ];
    }
}
