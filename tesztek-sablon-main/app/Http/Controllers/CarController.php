<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with(['model','model.brand','merchant'])->get();

        return response()->json($cars);
    }

    public function create(CarRequest $request)
    {
        $car = new Car();

        $car->fill([
            'model_id' => $request->get('model_id'),
            'fuel' => $request->get('fuel'),
            'engine' => $request->get('engine'),
            'active' => $request->get('active'),
        ]);

        if ($request->has('merchant_id')) {
            $car->merchant()->associate($request->get('merchant_id'));
        }

        $car->save();

        return response()->json(['id' => $car->id], 201);
    }

    public function update(Car $car, CarRequest $request)
    {
        $car->update([
            'model_id' => $request->get('model_id'),
            'fuel' => $request->get('fuel'),
            'engine' => $request->get('engine'),
            'active' => $request->get('active'),
        ]);

        if ($request->has('merchant_id') && intval($request->get('merchant_id')) > 0) {
            $car->merchant()->associate($request->get('merchant_id'));
        } elseif (
            (!$request->has('merchant_id') && $car->merchant->id) ||
            ($request->has('merchant_id') && intval($request->get('merchant_id')) === -1)
        ) {
            $car->merchant()->disassociate();
        }
        $car->save();

        return response()->json($car->toArray());
    }

    public function delete(Car $car)
    {
        $car->delete();

        return response()->json(['OK'], 204);
    }
}
