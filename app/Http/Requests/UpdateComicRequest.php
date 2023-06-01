<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:100',
	        'thumb' => 'nullable|max:355',
	        'price' => 'nullable',
	        'description' => 'nullable|max:3000',
            'series' => 'required|min:5|max:100',
            'type' => 'nullable|min:5|max:100',
            'sale_date' => 'required|after:1900/01/01|before:today',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo deve essere inserito',
            'title.min' => 'Il titolo deve avere un minimo di 5 caratteri.',
            'title.max' => 'Il titolo deve avere un massimo di 5 caratteri.',
            'thumb.max' => 'La lunghezza dell\'immagine non può superare i 355 caratteri.',
            'description.max' => 'La lunghezza della descrizione non può superare i 3000.',
            'series.required' => 'La serie deve essere inserita',
            'series.min' => 'La lunghezza della serie deve essere minimo di 5 caratteri',
            'series.max' => 'La lunghezza della serie deve essere massimo di 100 caratteri',
            'type.min' => 'La lunghezza del tipo deve essere minimo di 5 caratteri',
            'type.max' => 'La lunghezza del tipo deve essere massimo di 100 caratteri',
            'sale_date.after' => 'Non si può inserire una data antecedente al 1900-01-01',
            'sale_date.before' => 'Non si può inserire una data successiva a quella odierna',
        ];
    }
}
