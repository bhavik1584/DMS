<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'profile_image'=>'nullable|mimes:png,jpg,jpeg|size:2000',
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'mobile_no'=>'required|min:10',
            'password'=> 'required|password',
            'confirm_password'=>'required|same:password',
        ];
    }
    public function messages(): array{
        return [
            'profile_image.size'=> 'max allow file size is 2MB.',
            'profile_image.mimes'=>'please uplode valid image should be png | jpg | jpeg.',
            'confirm_password.same'=>'password and confirm password must be same.'
        ];
    }
}
