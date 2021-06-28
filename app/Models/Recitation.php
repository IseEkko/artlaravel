<?php
/*
 * @Author: Alexcutest
 * @Date: 2021-06-28 11:29:08
 * @LastEditTime: 2021-06-28 16:58:07
 * @LastEditors: Alexcutest
 * @Description: 
 * @FilePath: /artlaravel-1/app/Models/Recitation.php
 * Learn and live
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recitation extends Model
{
    protected $table = "recitation";
    public $timestamps = true;
    protected $primaryKey = "recitation_id";
    protected $guarded = [];


    /**
     * @Author: Alexcutest
     * @description: 朗诵作品统计
     * @param {*} $opus_status
     * @return {*}
     */    
    public static function per_show($opus_status)
    {

        try {
            if ($opus_status == 0) {

                $res = Recitation::where('opus_status', '=', 0)
                    ->select('recitation_id', 'opus_name', 'contact_name', 'contact_number', 'contact_address', 'recitation_type', 'performer_number', 'opus_status')
                    ->get();

                return $res ?
                    $res :
                    false;
            } elseif ($opus_status == 1) {

                $res = Recitation::where('opus_status', '=', 1)
                    ->select('recitation_id', 'opus_name', 'contact_name', 'contact_number', 'contact_address', 'recitation_type', 'performer_number', 'opus_status')
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
     * @description: 朗诵表删除
     * @param {*} $opus_id
     * @return {*}
     */    
    public static function per_delete($opus_id){
        try{
            $res = Recitation::where('recitation_id','=',$opus_id)
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
            $res = Recitation::where('opus_name', '=', $opus_name)
            ->select('recitation_id', 'opus_name', 'contact_name', 'contact_number', 'contact_address', 'recitation_type', 'performer_number', 'opus_status')    
            ->get();

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;

    /*** 朗诵作品信息入库
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
                    'recitation_type' => $request->get('recitation_type'),
                    'opus_time' => $request->get('opus_time'),
                    'opus_name' => $request->get('opus_name'),
                    'performer_number' => $request->get('performer_number'),
                    'contact_name' => $request->get('contact_name'),
                    'contact_number' => $request->get('contact_number'),
                    'contact_address' => $request->get('contact_address'),
                    'recitation_group' => $request->get('recitation_group'),
                    'is_originality' => $request->get('is_originality'),
                    'opus_describe' => $request->get('opus_describe'),
                    'opus_file' => $request->get('opus_file')

                ]
            );
            $data=self::select('recitation_id')->where('opus_describe',$request->get('opus_describe'))
                ->get();
            return $data;
        }catch(\Exception $e){
            logError('器乐信息上传失败',[$e->getMessage()]);
            return null;

        }
    }
}
