<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class DesignRequest extends FormRequest
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
            'design_type'=> 'required',
            'opus_name' => 'required',
            'opus_instructor' => 'required',
            'create_time' => 'required',
            'contact_name' => 'required',
            'contact_number' => 'required',
            'contact_address' => 'required',
            'opus_long' => 'required',
            'opus_wide' => 'required',
            'design_group' => 'required',
            'opus_file' => 'required',
            'author_brief' => 'required',
            'opus_brief' => 'required'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(json_fail('参数错误!',$validator->errors()->all(),422)));
    }
}
