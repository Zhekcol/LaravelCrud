<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
        $curso = $this->route()->parameter('curso');

        $rules = [
            'name' => 'required|unique:cursos|min:3',
            'slug' => 'required|unique:cursos|min:3',
            'description' => 'required',
            'category' => 'required',
        ];

        if ($curso) {
            $rules['name'] = 'required|min:3|unique:cursos,name,' . $curso->id;
            $rules['slug'] = 'required|min:3|unique:cursos,slug,' . $curso->id;
        }

        return $rules;
    }
}
