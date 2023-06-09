<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255', 'unique:books'],
            'author_id' => ['required', 'integer'],
            'genre_id' => ['required', 'integer'],
            'isbn' => ['required', 'string', 'size:17', 'unique:books'],
            'pages' => ['required', 'integer'],
            'release_date' => ['required', 'date'],
            'description' => ['required', 'string'],
            'collection_id' => ['nullable', 'integer'],
            'emplacement_id' => ['nullable', 'integer'],
            'status' => ['required', 'string', 'in:available,unavailable'],
        ];
    }
}
