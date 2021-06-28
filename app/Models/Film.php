<?php
/*
 * @Author: Alexcutest
 * @Date: 2021-06-28 11:29:08
 * @LastEditTime: 2021-06-28 16:52:01
 * @LastEditors: Alexcutest
 * @Description: 
 * @FilePath: /artlaravel-1/app/Models/Film.php
 * Learn and live
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = "film";
    public $timestamps = true;
    protected $primaryKey = "film_id";
    protected $guarded = [];


    /**
     * @Author: Alexcutest
     * @description: 学生微电影作品统计 
     * @param {*} $opus_status
     * @return {*}
     */
    public static function stu_show($opus_status)
    {
        if ($opus_status == 0) {

            $res = Film::where('opus_status', '=', 0)
                ->join('sauthor', function ($join) {
                    $join->on('film_id', '=', 'sauthor.opus_id')
                        ->where('type_id', '=', 10);
                })
                ->select('film_id', 'opus_name', 'contact_name', 'film.contact_number', 'contact_address', 'sauthor.sauthor_name', 'opus_status')
                ->get();

            return $res ?
                $res :
                false;
        } elseif ($opus_status == 1) {

            $res = Film::where('opus_status', '=', 1)
                ->join('sauthor', function ($join) {
                    $join->on('film_id', '=', 'sauthor.opus_id')
                        ->where('type_id', '=', 10);
                })
                ->select('film_id', 'opus_name', 'contact_name', 'film.contact_number', 'contact_address', 'sauthor.sauthor_name', 'opus_status')
                ->get();

            return $res ?
                $res :
                false;
        }
    }

    /**
     * @Author: Alexcutest
     * @description: 学生微电影表删除
     * @param {*} $opus_id
     * @return {*}
     */
    public static function stu_delete($opus_id)
    {
        try {
            $res = Film::where('film_id', '=', $opus_id)
                ->delete();

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }

    /**
     * @Author: Alexcutest
     * @description: 搜索
     * @param {*} $opus_name
     * @return {*}
     */
    public static function search_show($opus_name)
    {
        try {
            $res = Film::where('opus_name', '=', $opus_name)
                ->join('sauthor', function ($join) {
                    $join->on('film_id', '=', 'sauthor.opus_id')
                        ->where('type_id', '=', 10);
                })
                ->select('film_id', 'opus_name', 'contact_name', 'film.contact_number', 'contact_address', 'sauthor.sauthor_name', 'opus_status')

                ->get();

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;

    /*** 微电影作品信息入库
     * @author zuoshengyu
     * @param $vocality_type
     * @param $opus_time
     * @param $opus_name1
     * @param $is_originality1
     * @param $is_chineseopus1
     * @param $opus_name2
     * @param $is_originality2
     * @param $is_chineseopus2
     * @param $contact_name
     * @param $contact_number
     * @param $contact_address
     * @param $vocality_group
     * @param $performer_number
     * @param $opus_describe
     * @param $opus_file
     * @return null
     */
    public static function add($request){
        try{
            $data =self::create(
                [
                    'film_time' => $request->get('film_time'),
                    'opus_name' => $request->get('opus_name'),
                    'opus_instructor' => $request->get('opus_instructor'),
                    'opus_instructor1' => $request->get('opus_instructor1'),
                    'opus_instructor2' => $request->get('opus_instructor2'),
                    'contact_number' => $request->get('contact_number'),
                    'contact_address' => $request->get('contact_address'),
                    'contact_name' => $request->get('contact_name'),
                    'create_time' => $request->get('create_time'),
                    'film_group' => $request->get('film_group'),
                    'opus_file' => $request->get('opus_file'),
                    'author_brief' => $request->get('author_brief'),
                    'opus_brief' => $request->get('opus_brief'),

                ]
            );
            $data=self::select('film_id')->where('author_brief',$request->get('author_brief'))
                ->get();
            return $data;
        }catch(\Exception $e){
            logError('器乐信息上传失败',[$e->getMessage()]);
            return null;

        }
    }
}
