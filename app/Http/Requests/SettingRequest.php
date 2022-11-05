<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_site'  => 'required',
            'address'  => 'required',
            'phone_1'  => 'required',
            'phone_2'  => 'required',
            'phone_3'  => 'required',
            'phone_4'  => 'required',
            'whats_num'  => 'required',
            'face_url'  => 'required',
            'twitter_url'  => 'required',
            'snap_url'  => 'required',

        ];
    }
}
