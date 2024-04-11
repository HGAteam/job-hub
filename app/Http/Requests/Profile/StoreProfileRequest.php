<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfileRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string|max:180',
            'last_name' => 'required|string|max:180',
            'email' => 'required|string|max:180',
            'phone' => 'required|string|max:180',
            'address' => 'required|string|max:180',
            'type' => 'required|string|max:180',
            'status' => 'required|string|max:180',
            'area' => 'required|string|max:180',
            'bio' => 'required|string|max:800000',
        ];
    }
}
