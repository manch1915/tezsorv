<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['required','string','max:15', Rule::unique('users')->ignore(Auth::id())],
            'first_name' => ['string','max:15','nullable'],
            'last_name' => ['string','max:25','nullable'],
            'about' => ['string','max:255','nullable'],
            'country' => ['string','max:255','nullable'],
            'gender' => ['numeric','max:255'],
            'telegram' => ['string','max:255','nullable'],
            'instagram' => ['string','max:255','nullable'],
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()
        ]));
    }
}
