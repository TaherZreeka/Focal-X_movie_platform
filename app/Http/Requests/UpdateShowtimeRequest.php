<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateShowtimeRequest extends FormRequest
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
            'movie_id'   => 'exists:movies,id',
            'date'       => 'date',
            'hall'       => 'string|max:255',
            'price'      => 'numeric|min:0',
            'show_type'  => 'in:morning,evening,weekend,vip',
        ];
    }
}
