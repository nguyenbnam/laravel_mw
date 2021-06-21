<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestName extends FormRequest
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
            //
            'name'=>'required|max:255',
            
        ];
    }

    public function messages()
    {
        return [
            // 'id.required' => 'Trường ID là bắt buộc'];
            'id'=>'required, integer'// thang nay  quy uoc la bat buoc va phai la integer
        ];
    }
}
