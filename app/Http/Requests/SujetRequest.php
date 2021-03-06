<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SujetRequest extends FormRequest
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
            'titreevenement' => 'bail|required|string|max:50',
            'datedebut' => 'bail|required|date',
            'datefin' => 'bail|required|date',
            'lieuevenement' => 'bail|required|string|max:50',

        ];
    }
}
