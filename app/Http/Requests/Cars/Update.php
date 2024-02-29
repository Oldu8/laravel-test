<?php

namespace App\Http\Requests\Cars;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Update extends FormRequest
{
    protected function vinUniqueRule(): Rule
    {
        return parent::vinUniqueRule()->ignore($this->car->id);
    }
}
