<?php
namespace App\Filament\Resources\JadwalMakanResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\JadwalMakan;

/**
 * @property JadwalMakan $resource
 */
class JadwalMakanTransformer extends JsonResource
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
