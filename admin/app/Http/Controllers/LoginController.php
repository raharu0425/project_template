<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eloquent\Models\AdminUser;
use App\Http\Controllers\BaseController;

class LoginController extends BaseController
{

    /**
     * オーバービュー
     */
    public function index()
    {
        return view('login', ['error_msg', []]);
    }

    /**
     * ログイン処理
     */
    public function login(Request $request)
    {

        if(!$request->has('account')) $this->addError('アカウント名を入力してください');
        if(!$request->has('password')) $this->addError('パスワードを入力してください');

        if($this->is_error){
            return view('login', ['error_msg', $this->error_msg]);
        }

        var_dump($this->error_msg);
    }
}
