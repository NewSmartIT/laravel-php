<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleRequest extends Request
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
            'title' => 'required|min:3',
            'content' => 'required',
            'author_id' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'Please Enter Title',
            'content.required'=>'Please Enter content',
            'author_id.required'=>'Please Enter author_id'
        ];
    }
}
