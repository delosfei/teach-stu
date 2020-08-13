<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RoleRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'=>['required','between:3,50',Rule::unique('roles')->ignore(request()->role)],
            'name'=>['required','between:3,50','regex:/^[\w\-]+$/',Rule::unique('roles')->ignore(request()->role)],
        ];
    }
    public function messages(){
        return [
            'name.regex'=>'请输入英文的角色标识'
        ];
    }
}
