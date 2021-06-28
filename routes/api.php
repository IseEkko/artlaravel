<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('uppic')->group(function (){
    Route::post('uppic','TestCntroller@upload_file');//上传图片
});//lzz
Route::prefix('user')->group(function () {
    Route::post('login', 'LoginController@login'); //管理员登陆
    Route::post('logout', 'LoginController@logout'); //管理员退出登陆
    Route::post('registered', 'LoginController@registered'); //管理员注册
});//--lzz

Route::prefix('art')->namespace('Art')->group(function () {
    Route::post('vocalmusic', 'ArtController@vocalmusic'); //声乐作品入库
    Route::post('vguidance', 'ArtController@vguidance');//声乐作品指导老师入库
    Route::post('vstudent', 'ArtController@vstudent');//声乐参演学生入库
    Route::post('vcommand', 'ArtController@vcommand');//声乐指挥老师入库
    Route::post('vbstudent', 'ArtController@vbstudent');//声乐伴奏学生入库
    Route::post('vbteacher', 'ArtController@vbteacher');//声乐伴奏老师入库
    Route::post('inmusic', 'ArtController@inmusic');//器乐作品入库
    Route::post('iguidance', 'ArtController@iguidance');//器乐作品指导老师入库
    Route::post('istudent', 'ArtController@istudent');//器乐作品参演学生入库
    Route::post('ibteacher', 'ArtController@ibteacher');//器乐作品指挥老师入库
    Route::post('ibstudent', 'ArtController@ibstudent');//器乐作品指挥学生入库
    Route::post('dance', 'ArtController@dance');//舞蹈作品入库
    Route::post('dguidance', 'ArtController@dguidance');//舞蹈指导老师入库
    Route::post('dstudent', 'ArtController@dstudent');//舞蹈参演学生入库
    Route::post('opera', 'ArtController@opera');//戏曲作品入库
    Route::post('opguidance', 'ArtController@opguidance');//戏曲指导老师入库
    Route::post('opstudent', 'ArtController@opstudent');//戏曲参演学生入库
    Route::post('opbstudent', 'ArtController@opbstudent');//戏曲伴奏学生入库
    Route::post('opbteacher', 'ArtController@opbteacher');//戏曲伴奏老师入库
    Route::post('recitation', 'ArtController@recitation');//朗诵作品入库
    Route::post('reguidance', 'ArtController@reguidance');//朗诵指导老师入库
    Route::post('restudent', 'ArtController@restudent');//朗诵参演学生入库
    Route::post('rebteacher', 'ArtController@rebteacher');//朗诵伴奏老师入库
    Route::post('rebstudent', 'ArtController@rebstudent');//朗诵伴奏学生入库
});//--zsy

Route::prefix('artp')->namespace('Artp')->group(function () {
    Route::post('paint', 'ArtpController@paint');//绘画作品入库
    Route::post('pauth', 'ArtpController@pauth');//绘画作品作者入库
    Route::post('caphy', 'ArtpController@caphy');//书法作品入库
    Route::post('cauth', 'ArtpController@cauth');//书法作品作者入库
    Route::post('phophy', 'ArtpController@phophy');//摄影作品入库
    Route::post('phauth', 'ArtpController@phauth');//摄影作品作者入库
    Route::post('design', 'ArtpController@design');//设计作品入库
    Route::post('deauth', 'ArtpController@deauth');//设计作品作者入库
    Route::post('film', 'ArtpController@film');//微电影作品入库
    Route::post('fauth', 'ArtpController@fauth');//微电影作品作者入库

});//--zsy
