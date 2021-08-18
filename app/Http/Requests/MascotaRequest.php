<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MascotaRequest extends FormRequest
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
            'nombre' => ['required'],
            'url' => [''],
            'fecha_nac' => ['required'],
            'sexo' => ['required'],
            'raza' => ['required'],
            'color' => ['required'],
            'caracteristicas' => ['required'],
            'foto' => ['image', 'mimes:jpg', 'max:2048', 'nullable'],
            'solicitud' => ['nullable', 'mimes:pdf'],
            'tipo_id' => ['required', 'integer'],
            'user_id' => [''],
            'estado' => ['nullable'],
            'estado_qr' => ['nullable'],
        ];
    }
}
