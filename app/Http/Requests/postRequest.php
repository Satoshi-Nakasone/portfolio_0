<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postRequest extends FormRequest
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
          'user_id' => ['required'],
          'title' => ['required' , 'min:1'],
          'body' => ['required' , 'min:1']
        ];
    }

    public function messages() {
    return [
        'title.required' => ':attributeは必須項目です。',
        'body.required' => ':attributeは必須項目です。',
    ];
  }

  public function attributes()
  {
    return [
        'title' => '題名',
        'body' => '記事',
    ];
  }
}
