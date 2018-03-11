<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticle extends FormRequest
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
          'title' => 'string|max:'.$this->titleMax,
          'body' => 'string|min:'.$this->bodyMin,
          'tag' => 'string|max:'.$this->tagMax,
        ];
    }

    public function messages()
    {
        return [
            'title.max' => 'Le titre ne peut pas dépasser '.$this->titleMax.' caractères',
            'body.min' => 'L\'article doit avoir au moins '.$this->bodyMin.' caractères',
            'tag.max' => 'Le mot clé ne peut pas dépasser '.$this->tagMax.' caractères',
        ];
    }
}
