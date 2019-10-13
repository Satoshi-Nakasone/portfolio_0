<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class commentRequest extends FormRequest
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
          'post_id' => ['required'],
          'user_id' => ['required'],
          'body' => ['required' , 'min:1']
        ];
    }

    public function messages() {
    return [
        'body.required' => ':attributeは必須項目です。',
    ];
  }

  public function attributes()
  {
    return [
        'body' => 'コメント',
    ];
  }
}
