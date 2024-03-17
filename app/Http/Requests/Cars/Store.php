<?php

namespace App\Http\Requests\Cars;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Store extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $transmissions = config('app-cars.transmissions');

        return [
            'brand_id' => 'required|exists:brands,id',
            'model' => 'required|min:2|max:64',
            'transmission' => ['required', Rule::in(array_keys($transmissions))],
            'vin' => ['required', 'min:4', 'max:10', Rule::unique('cars', 'vin')],
            'tags' => 'array',
            'tags.*' => 'integer|exists:tags,id',
        ];
    }

}
