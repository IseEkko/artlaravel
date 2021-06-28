<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class InMusicRequest extends FormRequest
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
            'insmusic_type'=> 'required',
            'opus_time' => 'required',
            'opus_name' => 'required',
            'performer_number' => 'required',
            'contact_name' => 'required',
            'contact_number' => 'required',
            'contact_address' => 'required',
            'insmusic_group' => 'required',
            'is_originality' => 'required',
            'opus_describe' => 'required',
            'opus_file' => 'required'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(json_fail('参数错误!',$validator->errors()->all(),422)));
    }
}
