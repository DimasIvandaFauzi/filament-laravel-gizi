<?php
namespace App\Filament\Resources\HasilGiziResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\HasilGiziResource;
use Illuminate\Routing\Router;


class HasilGiziApiService extends ApiService
{
    protected static string | null $resource = HasilGiziResource::class;

    public static function handlers() : array
    {
        return [
            Handlers\CreateHandler::class,
            Handlers\UpdateHandler::class,
            Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            Handlers\DetailHandler::class
        ];

    }
}
