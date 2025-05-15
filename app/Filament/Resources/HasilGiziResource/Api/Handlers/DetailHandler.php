<?php

namespace App\Filament\Resources\HasilGiziResource\Api\Handlers;

use App\Filament\Resources\SettingResource;
use App\Filament\Resources\HasilGiziResource;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Http\Request;
use App\Filament\Resources\HasilGiziResource\Api\Transformers\HasilGiziTransformer;

class DetailHandler extends Handlers
{
    public static string | null $uri = '/{id}';
    public static string | null $resource = HasilGiziResource::class;


    /**
     * Show HasilGizi
     *
     * @param Request $request
     * @return HasilGiziTransformer
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

        return new HasilGiziTransformer($query);
    }
}
