<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eloquent\Models\AdminUser;

class BaseController extends Controller
{
    /**
     * @properties
     */

    //管理画面エラーメッセージの配列
    public $error_msg = array();

    //エラー判定フラグ
    public $is_error = false;

    //エラー時
    public function addError($message = null)
    {
        $is_error = true;
        $this->addErrorMsg($message);
    }

    //エラーメッセージの追加
    private function addErrorMsg($message = 'has Error!')
    {
        array_push($this->error_msg, $message);
    }

}
