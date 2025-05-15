<?php

namespace App\Filament\Resources\JadwalMakanResource\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJadwalMakanRequest extends FormRequest
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
			'waktu_makan' => 'required',
			'tanggal' => 'required|date',
			'menu' => 'required',
			'kalori_menu' => 'required'
		];
    }
}
