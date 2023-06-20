<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreCategoryPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->name),
            // i can also concatenate the slug with the id or combane weith Str::of
            // 'slug' => Str::slug($this->title).'-'.$this->id,
            // 'slug' => Str::of($this->title)->slug()->append('-'.$this->id),
                ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public static function rules()
    {
        return [
            'name' => 'required|min:5|max:255',
            'slug' => 'min:5|max:255|unique:posts,slug',
          
        ];
    }
}
