<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequeat extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
            'poster' => 'required_if:is_new,true|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required|string|max:1000',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'trailer_url' => 'required|url',
            'age_rating' => 'required|string|in:G,PG,PG-13,R,NC-17',
            'language' => 'required|string',
            'genres' => 'required|array|min:1',
            'genres.*' => 'exists:genres,id'
        ];
    }

    public function messages()
    {
        return [
            'poster.required_if' => 'حقل البوستر مطلوب عند إضافة فيلم جديد',
            'genres.required' => 'يجب اختيار نوع واحد على الأقل',
            'age_rating.in' => 'التصنيف العمري غير صحيح'
        ];
    }
}
