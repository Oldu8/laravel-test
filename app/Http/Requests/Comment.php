<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class Comment extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'text' => ['required', 'string', 'max:255'],
        ];
    }

    public function checkCommentable()
    {
        $commentables = config('commentable');
        if (!isset($commentables[$this->model])) {
            throw ValidationException::withMessages(['model' => 'Invalid model.']);
        }
        $model = $commentables[$this->model]::findOrFail($this->id);
        return $model;
    }
}
