<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnrollmentFormRequest extends FormRequest
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
            'name'              => ['required','min:3','max:250'],
            'course'            => ['required','min:3','max:25'],
            'phone'             => ['required','min:3','max:25'],
            'email'             => ['required','min:3','max:250','unique:enrollments'],
            'birthday'          => ['required'],
            'rg'                => ['required','min:6','max:15'],
            'cpf'               => ['required','min:11','max:15'],
            'address'           => ['required','min:3','max:250'],
            'neighborhood'      => ['required','min:3','max:100'],
            'state'             => ['required','min:3','max:100'],
            'responsible'       => ['required','min:3','max:250'],
            'accordingly'       => ['required'],
        ];

    }
    public function messages()
    {
        return [
            'required'  => 'O campo :attribute é obrigatório.',
            'min'       => 'O campo :attribute precisa ter mais de 3 letras.',
            'unique'    => 'Cadastro duplicado.',
        ];

    }
}