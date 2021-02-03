<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'no_player' => 'required|numeric',
            'state_name' => 'required|min:2|max:128',
            'city_name' => 'min:2|max:128',
            'extra_info' => 'max:1024'
        ];
    }
}
