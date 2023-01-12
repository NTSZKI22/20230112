<?php

namespace App\Http\Controllers;

use App\Http\Requests\MerchantRequest;
use App\Models\Merchant;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function index()
    {
        $merchants = Merchant::with(['cars', 'cars.model', 'cars.model.brand'])->get();

        return response()->json($merchants);
    }

    public function create(MerchantRequest $request)
    {
        $merchant = new Merchant();
        $merchant->fill([
            'name' => $request->get('name'),
            'address' => $request->get('address'),
            'phone' => $request->get('phone'),
            'active' => $request->get('active')
        ]);
        $merchant->save();

        return response()->json(['id' => $merchant->id], 201);
    }

    public function update(Merchant $merchant, MerchantRequest $request)
    {
        $merchant->update([
            'name' => $request->get('name'),
            'address' => $request->get('address'),
            'phone' => $request->get('phone'),
            'active' => $request->get('active')
        ]);

        return response()->json($merchant->toArray());
    }

    public function delete(Merchant $merchant)
    {
        $merchant->delete();

        return response()->json(["OK"], 204);
    }
}
