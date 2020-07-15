<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class souscriptionRequest extends FormRequest
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
            'marque' => ['required', 'max:255'],
            'model' => ['required', 'max:255'],
            'serie' => ['required', 'max:255'],
            'energie' => ['required', 'max:255'],
            'immatriculation' => ['required', 'max:255'],
            'kilometrage' => ['required', 'max:255'],
            'visite' => ['required', 'max:255'],
            'assurance' => ['required', 'max:255'],
            'paiement' => ['nullable', 'min:8'],
            'numero' => ['nullable', 'min:8'],
            'email' => ['required', 'email', 'max:255'],
            'parrain' => ['nullable']
        ];
    }
}
