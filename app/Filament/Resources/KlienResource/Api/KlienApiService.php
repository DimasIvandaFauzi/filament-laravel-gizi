<?php
namespace App\Filament\Resources\KlienResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\KlienResource;
use Illuminate\Routing\Router;


class KlienApiService extends ApiService
{
    protected static string | null $resource = KlienResource::class;

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
