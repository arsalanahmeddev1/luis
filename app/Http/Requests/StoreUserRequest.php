<?php

namespace App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'birth_date' => 'required',
            'password' => 'required',
            'city' => 'required',
            'perish' => 'required',
            'primary_language' => 'required',
            'secondary_language' => 'required',
            'impairment' => 'required',
        ];
    }

    public function sanitized(){

        return [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'birth_date' => $this->birth_date,
            'password' => Hash::make($this->password),
            'city' => $this->city,
            'perish' => $this->perish,
            'primary_language' => $this->primary_language,
            'secondary_language' => $this->secondary_language,
            'impairment' => $this->impairment,
            'status' => 'active',
        ];
    }
}
