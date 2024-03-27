<?php

namespace App\Http\Requests\Api\V1\User;

use App\Http\Requests\BaseApiRequest as FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'password' => 'nullable|string|min:8',
            'password_confirmation' => 'nullable|string|min:8|same:password|required_with:password',
        ];
    }
}
