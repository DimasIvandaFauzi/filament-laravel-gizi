<?php
namespace App\Filament\Resources\HasilGiziResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\HasilGiziResource;
use App\Filament\Resources\HasilGiziResource\Api\Requests\CreateHasilGiziRequest;

class CreateHandler extends Handlers {
    public static string | null $uri = '/';
    public static string | null $resource = HasilGiziResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }

    /**
     * Create HasilGizi
     *
     * @param CreateHasilGiziRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreateHasilGiziRequest $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Create Resource");
    }
}