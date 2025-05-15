<?php
namespace App\Filament\Resources\HasilGiziResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\HasilGiziResource;
use App\Filament\Resources\HasilGiziResource\Api\Requests\UpdateHasilGiziRequest;

class UpdateHandler extends Handlers {
    public static string | null $uri = '/{id}';
    public static string | null $resource = HasilGiziResource::class;

    public static function getMethod()
    {
        return Handlers::PUT;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }


    /**
     * Update HasilGizi
     *
     * @param UpdateHasilGiziRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(UpdateHasilGiziRequest $request)
    {
        $id = $request->route('id');

        $model = static::getModel()::find($id);

        if (!$model) return static::sendNotFoundResponse();

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Update Resource");
    }
}