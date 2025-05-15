<?php

namespace App\Filament\Resources\KlienResource\Api\Handlers;

use App\Filament\Resources\SettingResource;
use App\Filament\Resources\KlienResource;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;
use App\Filament\Resources\KlienResource\Api\Transformers\KlienTransformer;

class DetailHandler extends Handlers
{
    public static string | null $uri = '/{id}';
    public static string | null $resource = KlienResource::class;


    /**
     * Show Klien
     *
     * @param Request $request
     * @return KlienTransformer
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

        return new KlienTransformer($query);
    }
}
