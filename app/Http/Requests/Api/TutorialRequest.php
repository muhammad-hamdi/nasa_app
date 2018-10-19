<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\BaseRequest;

class TutorialRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'content' => 'required|min:10'
        ];
    }
}
