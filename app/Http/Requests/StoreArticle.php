<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticle extends FormRequest
{
    protected $titleMax = 500;
    protected $bodyMin = 6;
    protected $tagMax = 10;

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
          'title' => 'required|string|max:'.$this->titleMax,
          'body' => 'required|string|min:'.$this->bodyMin,
          'tag' => 'string|max:'.$this->tagMax,
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Le titre est obligatoire, merci de remplir ce champs',
            'title.max' => 'Le titre ne peut pas dépasser '.$this->titleMax.' caractères',
            'body.min' => 'L\'article doit avoir au moins '.$this->bodyMin.' caractères',
            'body.required'  => 'Le corps de votre article est obligatoire, merci de remplir ce champs',
            'tag.max' => 'Le mot clé ne peut pas dépasser '.$this->tagMax.' caractères',
        ];
    }
}
