<?php
namespace App\Filament\Resources\JadwalMakanResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\JadwalMakanResource;
use App\Filament\Resources\JadwalMakanResource\Api\Requests\UpdateJadwalMakanRequest;

class UpdateHandler extends Handlers {
    public static string | null $uri = '/{id}';
    public static string | null $resource = JadwalMakanResource::class;

    public static function getMethod()
    {
        return Handlers::PUT;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }


    /**
     * Update JadwalMakan
     *
     * @param UpdateJadwalMakanRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(UpdateJadwalMakanRequest $request)
    {
        $id = $request->route('id');

        $model = static::getModel()::find($id);

        if (!$model) return static::sendNotFoundResponse();

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Update Resource");
    }
}