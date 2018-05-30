<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterBankAndLoginRequest extends FormRequest
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
            'company_details_id',
            'acc_name' => 'required|max:255',
            'acc_number' => 'required|max:255',
            'institution_id' => 'required|max:255',
            'acc_type_id' => 'required|max:255',
            'branch_name' => 'required|max:255',
            'branch_code' => 'required|max:255',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255|unique:users',
            'password' => 'required|min:3|confirmed',
            'password_confirmation' => 'required|min:3',
            'security_question' => 'required|max:255',
            'security_answer' => 'required|max:255',
            'agent_id',
            'profession_id',
            'role_id',
        ];
    }
}
