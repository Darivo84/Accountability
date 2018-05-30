<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterContactRequest extends FormRequest
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
            'company_detail_id',
            'telephone' => 'required|max:255',
            'mobile' => 'required|max:255',
            'fax',
            'group_email' => 'required|max:255',
            'products' => 'required|max:255',
            'description' => 'required|max:3000',
            'physical_address_1' => 'required|max:255',
            'physical_address_2' => 'required|max:255',
            'physical_address_3' => 'required|max:255',
            'postal_code' => 'required|max:255',
            'postal_address_1',
            'postal_address_2',
            'postal_address_3',
            'web_address' => 'required|max:255',
        ];
    }
}
