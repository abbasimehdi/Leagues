<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'name' => 'required|min:2|max:128',
            'position' => 'required|min:2|max:128',
            'post' => 'required|min:2|max:128',
            'nationality' => 'required|min:2|max:128',
            'age' => 'required|numeric',
            'extra_info' => 'max:1024'
        ];
    }
}
