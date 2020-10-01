<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class InsertCategoryRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:category',
        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'Name is required!',
            'name.unique' => 'Name already exists!',
        ];
    }
}
