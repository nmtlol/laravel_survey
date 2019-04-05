<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAnswerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // 認証関係の判定を行う場合はここに処理を記述する。
                     // 特にない場合は常にtrueを返しておく。
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fullname' => 'required',
            'gender' => 'required',
            'age_id' => 'required',
            'email' => 'required|email',
            'feedback' => 'max:10000',
        ];
    }
    
    /**
     * 定義済みバリデーションルールのエラーメッセージ取得
     *
     * @return array
     */
    public function messages()
    {
        return [
            'fullname.required' => '※この項目は必須です',
            'age_id.required'  => '※この項目は必須です',
            'email.required'  => '※この項目は必須です',
        ];
    }
}
