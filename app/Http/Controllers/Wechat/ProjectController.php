<?php
/**
 * Created by PhpStorm.
 * User: dongysh
 * Date: 16/8/21
 * Time: 下午12:35
 */

namespace App\Http\Controllers\Wechat;

use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function getIndex()
    {
        echo '项目简介';
    }
}