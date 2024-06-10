<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:255|min:5',
            'publisher' => 'required|max:255|min:5',
            'genre' => 'required|max:255|min:5',
            'publication_date' => 'required|date',
            'word_count' => 'required|numeric',
            'price' => 'required|numeric',
        ];
    }
}
