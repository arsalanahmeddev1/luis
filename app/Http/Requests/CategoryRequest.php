<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => "required|unique:categories,name,".$this->id,
            'parent_id'=> 'numeric|nullable',
            'shelf'=>'required|numeric',
        ];
    }

    public function sanitized(){
        return[
            'name' => $this->name,
            'slug' => str_replace(' ', '_', strtolower($this->name)),
            'parent_id' => $this->parent_id ?: 0,
            'shelf'=> $this->shelf,
        ];
    }
}
