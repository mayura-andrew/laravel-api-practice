<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class StoreCustomerRequest extends FormRequest
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
            'name'=>['required'],
            'type'=>['required', Rule::in(['I','B', 'i', 'b'])],
            'email'=>['required', 'email'],
            'address'=>['required'],
            'city'=>['required'],
            'postalCode'=>['required'],
        ];
    }



    protected function prepareForValidation()
    {
        $this->merge([
            'postalCode' => $this->postal_code
        ]);
    }
    
}