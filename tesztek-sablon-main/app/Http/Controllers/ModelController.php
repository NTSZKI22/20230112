<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModelRequest;
use App\Models\CarModel;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index()
    {
        $models = CarModel::with("brand")->get();

        return response()->json($models);
    }

    public function create(ModelRequest $request)
    {
        $carModel = new CarModel();

        $carModel->brand_id = $request->get('brand_id');
        $carModel->name = $request->get('name');
        $carModel->save();

        return response()->json(["id" => $carModel->id], 201);
    }

    public function update(CarModel $model, ModelRequest $request)
    {
        $model->update([
            'brand_id' => $request->get('brand_id'),
            'name' => $request->get('name')
        ]);

        return response()->json($model->toArray());
    }

    public function delete(CarModel $model)
    {
        $model->delete();

        return response()->json(['OK'], 204);
    }
}
