<?php
/*
 * @Author: Alexcutest
 * @Date: 2021-06-28 11:29:08
 * @LastEditTime: 2021-06-28 16:49:05
 * @LastEditors: Alexcutest
 * @Description: 
 * @FilePath: /artlaravel-1/app/Models/Caphy.php
 * Learn and live
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caphy extends Model
{
    protected $table = "caphy";
    public $timestamps = true;
    protected $primaryKey = "caphy_id";
    protected $guarded = [];

    /**
     * @Author: Alexcutest
     * @description: 学生书法作品统计
     * @param {*} $opus_status
     * @return {*}
     */
    public static function stu_show($opus_status)
    {
        try {


            if ($opus_status == 0) {

                $res = Caphy::where('opus_status', '=', 0)
                    ->join('sauthor', function ($join) {

                        $join->on('caphy_id', '=', 'sauthor.opus_id')
                            ->where('type_id', '=', 7);
                    })
                    ->select('caphy_id', 'opus_name', 'contact_name', 'caphy.contact_number', 'contact_address', 'sauthor.sauthor_name', 'opus_status')
                    ->get();
                return $res ?
                    $res :
                    false;
            } elseif ($opus_status == 1) {

                $res = Caphy::where('opus_status', '=', 1)
                    ->join('sauthor', function ($join) {

                        $join->on('caphy_id', '=', 'sauthor.opus_id')
                            ->where('type_id', '=', 7);
                    })
                    ->select('caphy_id', 'opus_name', 'contact_name', 'caphy.contact_number', 'contact_address', 'sauthor.sauthor_name', 'opus_status')
                    ->get();
                return $res ?
                    $res :
                    false;
            }
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }

    /**
     * @Author: Alexcutest
     * @description: 学生书法表删除
     * @param {*} $opus_id
     * @return {*}
     */
    public static function stu_delete($opus_id)
    {
        try {
            $res = Caphy::where('caphy_id', '=', $opus_id)
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
            $res = Caphy::where('opus_name', '=', $opus_name)
                ->join('sauthor', function ($join) {

                    $join->on('caphy_id', '=', 'sauthor.opus_id')
                        ->where('type_id', '=', 7);
                })
                ->select('caphy_id', 'opus_name', 'contact_name', 'caphy.contact_number', 'contact_address', 'sauthor.sauthor_name', 'opus_status')
                ->get();

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }

    /*** 书法作品信息入库
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
                    'caphy_type' => $request->get('caphy_type'),
                    'opus_name' => $request->get('opus_name'),
                    'opus_instructor' => $request->get('opus_instructor'),
                    'create_time' => $request->get('create_time'),
                    'contact_name' => $request->get('contact_name'),
                    'contact_number' => $request->get('contact_number'),
                    'contact_address' => $request->get('contact_address'),
                    'opus_long' => $request->get('opus_long'),
                    'opus_wide' => $request->get('opus_wide'),
                    'caphy_group' => $request->get('caphy_group'),
                    'opus_file' => $request->get('opus_file'),
                    'author_brief' => $request->get('author_brief'),
                    'opus_brief' => $request->get('opus_brief'),

                ]
            );
            $data=self::select('caphy_id')->where('author_brief',$request->get('author_brief'))
                ->get();
            return $data;
        }catch(\Exception $e){
            logError('器乐信息上传失败',[$e->getMessage()]);
            return null;
        }
    }


}
