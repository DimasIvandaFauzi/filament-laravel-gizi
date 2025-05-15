<?php

namespace App\Filament\Resources\KlienResource\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateKlienRequest extends FormRequest
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
			'nama' => 'required',
			'gender' => 'required',
			'umur' => 'required',
			'berat_badan' => 'required|numeric',
			'tinggi_badan' => 'required|numeric',
			'level_aktivitas' => 'required',
			'foto' => 'required'
		];
    }
}
