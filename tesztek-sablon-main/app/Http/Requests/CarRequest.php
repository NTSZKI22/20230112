<?php

namespace App\Http\Requests;

class CarRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'model_id' => 'required|numeric|exists:models,id',
            'merchant_id' => 'numeric|exists:merchants,id',
            'fuel' => 'required',
            'engine' => 'required|numeric|min:1000|max:9999',
            'active' => 'required|boolean'
        ];
    }
}
