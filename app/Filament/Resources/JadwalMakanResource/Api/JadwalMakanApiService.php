<?php
namespace App\Filament\Resources\JadwalMakanResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\JadwalMakanResource;
use Illuminate\Routing\Router;


class JadwalMakanApiService extends ApiService
{
    protected static string | null $resource = JadwalMakanResource::class;

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
