<?php

namespace App\Http\Requests\Dashboard;

use App\Http\Requests\BaseRequest;

class ListTemplateRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function createRules()
    {
        return [
            'name' => 'required',
            'disaster_id' => 'required',
            'is_public' => 'sometimes',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function updateRules()
    {
        return [
            'name' => 'required',
            'is_public' => 'sometimes',
        ];
    }
}
