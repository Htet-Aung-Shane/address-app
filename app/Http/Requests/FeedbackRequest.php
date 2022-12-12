<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
        return [];
        return [
            //
            'name' => 'required|min:5',
            'phone' => 'required|min:9',
            'email' => 'nullable|email',
            'message' => 'required|min:10',
            'img'   => 'nullable'
        ];
    }

    public function messages(){
        return[
            'name.required' => 'We have to know your name',
            'name.min' => 'Please type your full name',
            'phone.required' => 'We have to know your phone number',
            'phone.min' => 'Please type your phone number',
            'message.required' => 'Please type the feedback messages!',
            'message.min' => 'Please type completely!'
        ];
    }
}
