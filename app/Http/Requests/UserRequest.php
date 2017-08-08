<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
        if($this->method() == 'PATCH') {
            $email_rule = 'required|email|max:100|unique:users,email,'.$this->get('id');
        }
        else {
            $email_rule = 'required|email|max:100|unique:users,email';
        }
        
        return [
            'name' => 'required|max:255',
            'email' => $email_rule,
            'level' => 'required|in:Kasir,Pelayan,Admin',
            'password' => 'required|confirmed|min:6'
        ];
    }
}
