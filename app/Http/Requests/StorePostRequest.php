<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is auhorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that appy to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'post_text' => 'required',
            'category_id' => 'required|exists:App\Models\Category,id'
        ];
    }

    public function messages()
    {
        return
            [
                'title.required' => 'Title is required!',
                'category_id.exists' => "Category does not exist!"
            ];
    }
}
