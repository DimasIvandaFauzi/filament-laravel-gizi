<?php
namespace App\Filament\Resources\JadwalMakanResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\JadwalMakanResource;
use App\Filament\Resources\JadwalMakanResource\Api\Requests\CreateJadwalMakanRequest;

class CreateHandler extends Handlers {
    public static string | null $uri = '/';
    public static string | null $resource = JadwalMakanResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }

    /**
     * Create JadwalMakan
     *
     * @param CreateJadwalMakanRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreateJadwalMakanRequest $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Create Resource");
    }
}