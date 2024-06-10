<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
            'title' => 'max:255|min:5',
            'publisher' => 'max:255|min:5',
            'genre' => 'max:255|min:5',
            'publication_date' => 'date',
            'word_count' => 'numeric',
            'price' => 'numeric',
        ];
    }
}
