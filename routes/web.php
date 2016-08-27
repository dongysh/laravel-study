<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//微信响应消息路由
Route::any('/wechat', 'WechatController@serve');

//微信自定义菜单
Route::any('/admin/wechat/setmenu', 'Admin\WechatController@setMenu');

//微信公众号自定义菜单路由
Route::group(['prefix' => 'wechat', 'namespace' => 'Wechat'], function()
{
    Route::controller('/user', 'UserController');
    Route::controller('/house', 'HouseController');
    Route::controller('/business', 'BusinessController');
    Route::controller('/marketcenter', 'MarketCenterController');
    Route::controller('/project', 'ProjectController');
    Route::controller('/service', 'ServiceController');
});


