<?php

namespace DailyBlog\Http\Requests;

use DailyBlog\Http\Requests\Request;

use Illuminate\Support\Facades\Auth;

class PostStoreRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->is_admin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'url' => 'required',
            'body' => 'required',
        ];
    }
}
