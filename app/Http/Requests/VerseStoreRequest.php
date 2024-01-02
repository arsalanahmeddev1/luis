<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VerseStoreRequest extends FormRequest
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
            'verse'=>'required',
            'page'=>'required|numeric'
        ];
    }

    public function sanitized(){
        return [
            'verse'=>$this->verse,
            'page'=>$this->page,
        ];
    }
}
