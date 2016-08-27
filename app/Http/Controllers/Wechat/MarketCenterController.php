<?php
/**
 * Created by PhpStorm.
 * User: dongysh
 * Date: 16/8/21
 * Time: 下午12:36
 */

namespace App\Http\Controllers\Wechat;

use App\Http\Controllers\Controller;

class MarketCenterController extends Controller
{
    public function getIndex()
    {
        echo '营销中心';
    }
}