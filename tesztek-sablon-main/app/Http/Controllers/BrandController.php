<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brandds = Brand::with("models")->get();

        return response()->json($brandds);
    }

    public function create(BrandRequest $request)
    {
        $brand = new Brand();

        $brand->name = $request->get("name");
        $brand->save();

        return response()->json(["id" => $brand->id], 201);
    }

    public function update(Brand $brand, BrandRequest $request)
    {
        $brand->update([
            'name' => $request->get('name')
        ]);

        return response()->json($brand->toArray(), 200);
    }

    public function delete(Brand $brand)
    {
        $brand->delete();

        return response()->json(['OK'], 204);
    }
}
