<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeagueRequest extends FormRequest
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
            'contient_name' => 'required|min:2|max:128',
            'country_name' => 'required|min:2|max:128',
            'state_name' => 'min:2|max:128',
            'city_name' => 'min:2|max:128',
            'extra_info' => 'max:1024',
        ];
    }
}
