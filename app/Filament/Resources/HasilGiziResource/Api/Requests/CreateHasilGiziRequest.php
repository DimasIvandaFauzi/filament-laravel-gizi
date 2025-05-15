<?php

namespace App\Filament\Resources\HasilGiziResource\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateHasilGiziRequest extends FormRequest
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
			'id_klien' => 'required',
			'tanggal' => 'required|date',
			'kalori' => 'required|numeric',
			'karbohidrat' => 'required|numeric',
			'protein' => 'required|numeric',
			'lemak' => 'required|numeric',
			'saran_makanan' => 'required|string',
			'saran_aktivitas' => 'required|string'
		];
    }
}
