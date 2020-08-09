<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PackageRequest extends FormRequest
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


    public function rules()
    {
        return [
            'title' => ['required', 'min:3', 'max:20',Rule::unique('packages')->ignore(request()->package)]
        ];
    }
    public function messages(){
        return ['title.min'=>'套餐名称不能小于3个字符'];
    }
}
