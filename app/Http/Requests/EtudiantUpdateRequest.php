<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtudiantUpdateRequest extends FormRequest
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
            'id_registration' => 'bail|required|numeric',
            'lastname' => 'bail|required',
            'firstname' => 'bail|required|max:250',
            'sex' => 'bail|required|max:10',
            'birthday' => 'bail|required|date',
            'place_birth' => 'bail|required|max:250',
        ];
    }

    public function messages()
    {
        return [
            // custom messages pour id_registration
            'id_registration.required' => 'Le numéro matricule est obligatoire',

            // custom messages pour lastname
            'lastname.required' => 'Le nom est obligatoire',

            // custom messages pour firstname
            'firstname.required' => 'Le prénom est obligatoire',

            // custom messages pour sex
            'sex.required' => 'Le sexe est obligatoire',

            // custom messages pour birthday
            'birthday.required' => 'La date de naissance est obligatoire',

            // custom messages pour place_birth
            'place_birth.required' => 'Le lieu de naissance est obligatoire',
        ];
    }
}
