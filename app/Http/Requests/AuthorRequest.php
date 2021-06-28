<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AuthorRequest extends FormRequest
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
            'sauthor_name'=> 'required',
            'sauthor_card' => 'required',
            'sauthor_area' => 'required',
            'school_name' => 'required',
            'school_depa' => 'required',
            'major_type' => 'required',
            'major_name' => 'required',
            'student_number' => 'required',
            'contact_number' => 'required',
            'opus_id' => 'required'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(json_fail('参数错误!',$validator->errors()->all(),422)));
    }
}
