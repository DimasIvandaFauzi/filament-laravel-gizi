<?php
namespace App\Filament\Resources\KlienResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Klien;

/**
 * @property Klien $resource
 */
class KlienTransformer extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->resource->toArray();
    }
}
