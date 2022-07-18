<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserProfilRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $userRole = $this->user->getRole();
        if ($userRole->libelle == 'root' || $userRole->libelle == 'admin') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules($user)
    {
        return [
            // rules
            // 'firstName' => ['required', 'string'],
            // 'lastName' => ['required', 'string'],
            // 'pseudo' => ['string'],
            'name' => ['required', 'string', 'max:255'],
            // 'address' => ['string'],
            // 'codePost' => ['string'],
            // 'city' => ['string'],
            // 'phone' => ['string'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ]
        ];
    }

    /**
     * message of validation for update user
     *
     * @return void
     */
    public function messages()
    {
        return [
            // message of rule
            // 'firstName.required' => 'Champ obligatoire',
            // 'lastName.required' => 'Champ obligatoire',
            'name.required' => 'Champ obligatoire',
            'email.required' => 'Champ obligatoire',
            'email.email' => 'Entrer un email valide',
            'email.max' => 'Email trop long',
            'email.unique' => 'Impossible d\'éffectuer la demande',
        ];
    }
}
