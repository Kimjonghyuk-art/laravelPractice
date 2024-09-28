<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        //
        return view('login');   
    }

    public function loginSubmit(Request $request)
    {
        $validatedData = $this->validateRequest($request);

        $email = $request->input('email');
        $password = $request->input('password');
        return 'Email ' . $email . " , pw : " . $password;

    }
    /**
     * 유효성 검증
     *
     * @param [request] $request
     * @return validate
     */
    public function validateRequest($request)
    {
        return $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12'
        ], [
            'email.required' => '이메일을 입력해주세요.',
            'email.email' => '올바른 이메일 형식을 입력해주세요.',
            'password.required' => '비밀번호를 입력해주세요.',
            'password.min' => '비밀번호는 최소 6자 이상이어야 합니다.',
            'password.max' => '비밀번호는 최대 12자 이하이어야 합니다.'
        ]);
    }
}
