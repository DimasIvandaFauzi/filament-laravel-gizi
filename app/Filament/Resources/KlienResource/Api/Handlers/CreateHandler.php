<?php
namespace App\Filament\Resources\KlienResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use App\Filament\Resources\KlienResource;
use App\Filament\Resources\KlienResource\Api\Requests\CreateKlienRequest;

class CreateHandler extends Handlers {
    public static string | null $uri = '/';
    public static string | null $resource = KlienResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel() {
        return static::$resource::getModel();
    }

    /**
     * Create Klien
     *
     * @param CreateKlienRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreateKlienRequest $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, "Successfully Create Resource");
    }
}