<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class VocalStudentRequest extends FormRequest
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

            'opus_id' => 'required',
            'student_name' => 'required',
            'student_card' => 'required',
            'student_nation' => 'required',
            'student_age' => 'required',
            'student_sex' => 'required',
            'student_area' => 'required',
            'school_name' => 'required',
            'school_depa' => 'required',
            'student_grade' => 'required',
            'major_type' => 'required',
            'major_name' => 'required',
            'student_number' => 'required',
            'contact_number' => 'required',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(json_fail('参数错误!',$validator->errors()->all(),422)));
    }
}
