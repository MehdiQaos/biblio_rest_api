<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
        $method = $this->getMethod();

        if ($method == 'PUT') {
            return [
                'title' => ['required', 'string', 'max:255'],
                'author_id' => ['required', 'integer'],
                'genre_id' => ['required', 'integer'],
                'isbn' => ['required', 'string', 'max:17'],
                'pages' => ['required', 'integer'],
                'release_date' => ['required', 'date'],
                'description' => ['required', 'string'],
                'collection_id' => ['nullable', 'integer'],
                'emplacement_id' => ['nullable', 'integer'],
                'status' => ['required', 'string', 'in:available,unavailable'],
            ];
        } else {
            return [
                'title' => ['sometimes', 'required', 'string', 'max:255'],
                'author_id' => ['sometimes', 'required', 'integer'],
                'genre_id' => ['sometimes', 'required', 'integer'],
                'isbn' => ['sometimes', 'required', 'string', 'max:17'],
                'pages' => ['sometimes', 'required', 'integer'],
                'release_date' => ['sometimes', 'required', 'date'],
                'description' => ['sometimes', 'required', 'string'],
                'collection_id' => ['sometimes', 'nullable', 'integer'],
                'emplacement_id' => ['sometimes', 'nullable', 'integer'],
                'status' => ['sometimes', 'required', 'string', 'in:available,unavailable'],
            ];
        }
    }
}
