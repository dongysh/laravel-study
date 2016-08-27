<?php
/**
 * Created by PhpStorm.
 * User: dongysh
 * Date: 16/8/21
 * Time: 下午12:36
 */

namespace App\Http\Controllers\Wechat;

use App\Http\Controllers\Controller;

class HouseController extends Controller
{
    public function getShow()
    {
        echo '360看房';
    }

    public function getAppreciate()
    {
        echo '楼书鉴赏';
    }

    public function getReserve()
    {
        echo '预约看房';
    }
}