<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public static function rules()
    {
        return [
            'title' => 'required|min:5|max:255',
            'slug' => 'required',
            'content' => 'required|min:5',
            'category_id' => 'required|integer',
            'posted' => 'required',
            'description' => 'required',
            //
        ];
    }
}
