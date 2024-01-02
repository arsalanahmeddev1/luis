<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageStoreRequest extends FormRequest
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
            'title'=>'required',
            'pagenumber'=>'required|numeric',
            'page_content'=>'required',
        ];
    }

    public function sanitized(){
        return [
            'pagenumber'=>$this->pagenumber,
            'title'=>$this->title,
            'content'=>$this->page_content,
        ];
    }
}