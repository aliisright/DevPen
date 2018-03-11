<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfile extends FormRequest
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
            'first_name' => 'required|string|min:2',
            'last_name' => 'required|string',
            'birth_date' => 'required|date_format:d/m/Y',
            'location' => 'required|string',
            'description' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'first_name.min' => 'Le prénom doit avoir au moins 2 caractères',
            'birth_date.date_format' => 'La date de naissance avoir le format jj/mm/aaaa (ex: écrire 01/07/1993 pour le 1er juillet 1993)',
        ];
    }
}
