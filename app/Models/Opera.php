<?php
/*
 * @Author: Alexcutest
 * @Date: 2021-06-28 11:29:08
 * @LastEditTime: 2021-06-28 16:53:01
 * @LastEditors: Alexcutest
 * @Description: 
 * @FilePath: /artlaravel-1/app/Models/Opera.php
 * Learn and live
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opera extends Model
{
    protected $table = "opera";
    public $timestamps = true;
    protected $primaryKey = "opera_id";
    protected $guarded = [];


    /**
     * @Author: Alexcutest
     * @description: 戏剧作品统计
     * @param {*} $opus_status
     * @return {*}
     */    
    public static function per_show($opus_status)
    {

        try {
            if ($opus_status == 0) {

                $res = Opera::where('opus_status', '=', 0)
                    ->select('opera_id', 'opus_name', 'contact_name', 'contact_number', 'contact_address', 'opera_type', 'performer_number', 'opus_status')
                    ->get();

                return $res ?
                    $res :
                    false;
            } elseif ($opus_status == 1) {

                $res = Opera::where('opus_status', '=', 1)
                    ->select('opera_id', 'opus_name', 'contact_name', 'contact_number', 'contact_address', 'opera_type', 'performer_number', 'opus_status')
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
     * @description: 戏剧表删除
     * @param {*} $opus_id
     * @return {*}
     */    
    public static function per_delete($opus_id){
        try{
            $res = Opera::where('opera_id','=',$opus_id)
            ->delete();

            return $res ?
                    $res :
                    false;

        }catch(\Exception $e){
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
            $res = Opera::where('opus_name', '=', $opus_name)
            ->select('opera_id', 'opus_name', 'contact_name', 'contact_number', 'contact_address', 'opera_type', 'performer_number', 'opus_status')    
            ->get();

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }
    

    /*** 戏剧作品信息入库
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
                    'opera_type' => $request->get('opera_type'),
                    'opus_time' => $request->get('opus_time'),
                    'opus_name' => $request->get('opus_name'),
                    'performer_number' => $request->get('performer_number'),
                    'contact_name' => $request->get('contact_name'),
                    'contact_number' => $request->get('contact_number'),
                    'contact_address' => $request->get('contact_address'),
                    'opera_group' => $request->get('opera_group'),
                    'is_originality' => $request->get('is_originality'),
                    'opus_describe' => $request->get('opus_describe'),
                    'opus_file' => $request->get('opus_file')

                ]
            );
            $data=self::select('opera_id')->where('opus_describe',$request->get('opus_describe'))
                ->get();
            return $data;
        }catch(\Exception $e){
            logError('器乐信息上传失败',[$e->getMessage()]);
            return null;
        }
    }

}
