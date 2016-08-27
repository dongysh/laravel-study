<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use EasyWeChat\Foundation\Application;

/**
 * Created by PhpStorm.
 * User: dongysh
 * Date: 16/8/21
 * Time: 上午10:40
 */
class WechatController extends Controller
{
    /**
     * 设置菜单
     *
     * @return mixed
     */
    public function setMenu(Application $wechat)
    {
//        $menus = Input::get('menu'); // menu 是后台管理中心表单post过来的一个数组
        $host = 'http://bxly.applinzi.com';
        $buttons = [
            [
                "name"       => "百信领寓",
                "sub_button" => [
                    [
                        "type" => "view",
                        "name" => "我的",
                        "url"  => $host. '/wechat/user/index'
                    ],
                    [
                        "type" => "view",
                        "name" => "项目简介",
                        "url"  => $host. '/wechat/project/index'
                    ],
                    [
                        "type" => "view",
                        "name" => "商业配套",
                        "url" => $host. '/wechat/business/index'
                    ],
                ],
            ],
            [
                "name"       => "一寓倾城",
                "sub_button" => [
                    [
                        "type" => "view",
                        "name" => "360看房",
                        "url"  => $host. '/wechat/house/show'
                    ],
                    [
                        "type" => "view",
                        "name" => "楼书鉴赏",
                        "url"  => $host. '/wechat/house/appreciate'
                    ],
                    [
                        "type" => "view",
                        "name" => "营销中心",
                        "url" => $host. '/wechat/marketcenter/index'
                    ],
                    [
                        "type" => "view",
                        "name" => "预约看房",
                        "url" => $host. '/wechat/house/reserve'
                    ],
                ],
            ],
            [
                "name"       => "臻致服务",
                "sub_button" => [
                    [
                        "type" => "view",
                        "name" => "物业服务",
                        "url"  => $host. '/wechat/service/property'
                    ],
                    [
                        "type" => "view",
                        "name" => "生活服务",
                        "url"  => $host. '/wechat/service/life'
                    ],
                    [
                        "type" => "view",
                        "name" => "定制服务",
                        "url" => $host. '/wechat/service/custom'
                    ],
                    [
                        "type" => "view",
                        "name" => "预约服务",
                        "url" => $host. '/wechat/service/reserve'
                    ],
                ],
            ],
        ];

        $menu = $wechat->menu;
        $menu->add($buttons);

        return \Redirect::back()->withMessage('菜单设置成功！');
    }
}