<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'name' => "required|unique:books,name,".$this->id,
            'category_id'=> 'required|numeric',
            'shelf'=>'required|numeric',

        ];
    }

    public function sanitizedBook(){
        return[
            'name' => $this->name,
            'slug' => str_replace(' ', '_', strtolower($this->name)),
            'category_id' => $this->category_id ?: 0,
            'shelf' => $this->shelf,
            'summary'=> '-',
            'feature_shelf'=>$this->feature_shelf,
            'feature_position'=>$this->feature_position,
        ];
    }
    public function sanitizedPages(){
        // return[
        //     'page_title' => $this->page_title,
        //     'page_content' => $this->page_content,

        // ];

        $arr = [];
        foreach ($this->title as $key => $n) {

            $arr[$key]['title'] = $n;
            $arr[$key]['content'] = $this->page_content[$key];
            $arr[$key]['pagenumber'] = $this->pagenumber[$key];

        }

        return $arr;
    }
}
