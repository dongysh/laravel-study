<?php

namespace App\Http\Controllers\Wechat;

use App\Http\Controllers\Controller;

/**
 * Created by PhpStorm.
 * User: dongysh
 * Date: 16/8/21
 * Time: 下午12:10
 */
class UserController extends Controller
{
    public function getIndex()
    {
        return view('wechat.user.index');
    }

    public function getOrder()
    {
        return view('wechat.user.order');
    }

    public function getWilltodo()
    {
        return view('wechat.user.willtodo');
    }

    public function getNeedtodo()
    {
        return view('wechat.user.needtodo');
    }
}