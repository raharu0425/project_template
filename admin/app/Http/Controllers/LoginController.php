<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eloquent\Models\AdminUser;

class LoginController extends Controller
{

    /**
     * オーバービュー
     */
    public function index()
    {
        /*
        $user = AdminUser::find(1);

        $new_user = new AdminUser;
        $new_user->account = 'guest';
        $new_user->password = 'guest';
        $new_user->role = 'member';
        $new_user->save();

        var_dump(get_class($user));
        var_dump($user->account);
         */
        return view('login');
    }
}
