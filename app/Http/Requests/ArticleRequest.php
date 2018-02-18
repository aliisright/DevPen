<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    protected $max = 500;
    protected $min = 6;

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
          'title' => 'required|string|max:'.$this->max,
          'body' => 'required|string|min:'.$this->min,
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Le titre est obligatoire, merci de remplir ce champs',
            'title.max' => 'Le titre ne peut pas dépasser '.$this->max.' caractères',
            'body.min' => 'L\'article doit avoir au moins '.$this->min.' caractères',
            'body.required'  => 'Le corps de votre article est obligatoire, merci de remplir ce champs',
        ];
    }
}
