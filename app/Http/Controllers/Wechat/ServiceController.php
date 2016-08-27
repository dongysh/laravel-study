<?php
/**
 * Created by PhpStorm.
 * User: dongysh
 * Date: 16/8/21
 * Time: 下午12:37
 */

namespace App\Http\Controllers\Wechat;

use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function getProperty()
    {
        echo '物业服务';
    }

    public function getLife()
    {
        echo '生活服务';
    }

    public function getCustom()
    {
        echo '定制服务';
    }

    public function getReserve()
    {
        echo '预约服务';
    }
}