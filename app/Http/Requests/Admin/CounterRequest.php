<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CounterRequest extends FormRequest
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
          'num1' => 'required',
          'val1' => 'required',
          'description1' => 'required',
          'num2' => 'required',
          'val2' => 'required',
          'description2' => 'required',
        ];
    }
}
