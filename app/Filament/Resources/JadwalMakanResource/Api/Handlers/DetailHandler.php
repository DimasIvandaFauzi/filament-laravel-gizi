<?php

namespace App\Filament\Resources\JadwalMakanResource\Api\Handlers;

use App\Filament\Resources\SettingResource;
use App\Filament\Resources\JadwalMakanResource;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;
use App\Filament\Resources\JadwalMakanResource\Api\Transformers\JadwalMakanTransformer;

class DetailHandler extends Handlers
{
    public static string | null $uri = '/{id}';
    public static string | null $resource = JadwalMakanResource::class;


    /**
     * Show JadwalMakan
     *
     * @param Request $request
     * @return JadwalMakanTransformer
     */
    public function handler(Request $request)
    {
        $id = $request->route('id');
        
        $query = static::getEloquentQuery();

        $query = QueryBuilder::for(
            $query->where(static::getKeyName(), $id)
        )
            ->first();

        if (!$query) return static::sendNotFoundResponse();

        return new JadwalMakanTransformer($query);
    }
}
