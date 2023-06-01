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
}
