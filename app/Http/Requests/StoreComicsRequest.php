<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
                'title' => 'required|Unique:comics|max:160',
                'type' => 'max:255|nullable',
                'sale_date' => 'date|nullable',
                'price' => 'integer|nullable',
                'thumb' => 'nullable'
             
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Titolo Obbligatorio',
            'date' => 'Inserire una data valida',
            'type' => 'descrizione troppo lunga',
            'price' => 'Il prezzo deve essere un numero'

        ];
    }
}
