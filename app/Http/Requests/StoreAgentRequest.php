<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAgentRequest extends StoreUserRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        
        return collect(parent::rules())->merge([
            'scope' => 'required|in:0,1,2',
            'signature' => 'nullable',
            'work' => 'required|min:3|string',
            'calendar' => 'required'
        ])->all();

    }
}
