<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'titulo'=>'required|min:5|max:50',
            'slug'=>'required|unique:posts',
            'categoria'=>['required','min:8','max:30'],
            'contenido'=>'required'
        ];
    }

    public function messages(){

        return[
            'titulo.required'=>'The :attribute field is required (edited)'
        ];
    }

    public function attributes(){
        return [
            'titulo'=>'Title',
            'categoria'=>'Category'
        ];
    }
}
